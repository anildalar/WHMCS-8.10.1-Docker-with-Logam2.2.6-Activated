
function drawGraph(selector, fulldata, unit)
 {
    //Prepare Graph
    var margin = {top: 20, right: 140, bottom: 30, left: 70};
    var width = $(selector).width() - margin.left - margin.right;
    var height = 500 - margin.top - margin.bottom;

    var parseDate = d3.time.format("%Y-%m-%d %H").parse;

    var x = d3.time.scale().range([0, width]);
    var y = d3.scale.linear().range([height, 0]);

    var color = d3.scale.category10();

    var xAxis = d3.svg.axis().scale(x).orient("bottom").innerTickSize(-height-10).outerTickSize(6).tickPadding(10);
    var yAxis = d3.svg.axis().scale(y).orient("left").innerTickSize(-width).outerTickSize(6).tickPadding(10);

    var line = d3.svg.line()
        .interpolate("basis")
        .x(function(d) { return x(d.time); })
        .y(function(d) { return y(d.value); });

    var svg = d3.select(selector).append("svg")
        .attr("width", '100%')
        .attr("height", height + margin.top + margin.bottom)
      .append("g")
        .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

    color.domain(d3.keys(fulldata[0]).filter(function(key) { return key !== "time"; }));

    fulldata.forEach(function(d) {
        d.time = parseDate(d.time);
    });
    
    var resources = color.domain().map(function(name) {
        return {
          name: name,
          values: fulldata.map(function(d) {
            return {time: d.time, value: +d[name]};
          })
        };
    });
    
    x.domain(d3.extent(fulldata, function(d) { return d.time; }));
    y.domain([
      d3.min(resources, function(c) { return d3.min(c.values, function(v) { return v.value ? v.value - 1 : 0; }); }),
      d3.max(resources, function(c) { return d3.max(c.values, function(v) { return v.value ? v.value + 1 : 1; }); })
    ]);

    svg.append("g")
        .attr("class", "x axis")
        .attr("transform", "translate(0," + height + ")")
        .call(xAxis);

    svg.append("g")
        .attr("class", "y axis")
        .call(yAxis)
      .append("text")
        .attr("transform", "rotate(-90)")
        .attr("y", 6)
        .attr("dy", ".71em")
        .style("text-anchor", "end")
        .text(unit);

    var resource = svg.selectAll(".resource")
        .data(resources)
      .enter().append("g")
        .attr("class", "resource");

    resource.append("path")
        .attr("class", "line")
        .attr("d", function(d) { return line(d.values); })
        .attr("data-legend",function(d) { return d.name})
        .style("stroke", function(d) { return color(d.name); });

//    resource.append("text")
//        .datum(function(d) { return {name: d.name, value: d.values[d.values.length - 1]}; })
//        .attr("transform", function(d) { return "translate(" + x(d.value.time) + "," + y(d.value.value) + ")"; })
//        .attr("x", 3)
//        .attr("dy", ".35em")
//        .text(function(d) { return d.name; })
//        .attr('style', "display: block;");


    legend = svg.append("g")
      .attr("class","legend")
      .attr("transform","translate(50,30)")
      .style("font-size","12px")
      .call(d3.legend);
}


// d3.legend.js 
// (C) 2012 ziggy.jonsson.nyc@gmail.com
// MIT licence

(function() {
d3.legend = function(g) {
  g.each(function() {
    var g= d3.select(this),
        items = {},
        svg = d3.select(g.property("nearestViewportElement")),
        legendPadding = g.attr("data-style-padding") || 5,
        lb = g.selectAll(".legend-box").data([true]),
        li = g.selectAll(".legend-items").data([true])

    lb.enter().append("rect").classed("legend-box",true)
    li.enter().append("g").classed("legend-items",true)

    svg.selectAll("[data-legend]").each(function() {
        var self = d3.select(this)
        items[self.attr("data-legend")] = {
          pos : self.attr("data-legend-pos") || this.getBBox().y,
          color : self.attr("data-legend-color") != undefined ? self.attr("data-legend-color") : self.style("fill") != 'none' ? self.style("fill") : self.style("stroke") 
        }
      })

    items = d3.entries(items).sort(function(a,b) { return a.value.pos-b.value.pos})

    
    li.selectAll("text")
        .data(items,function(d) { return d.key})
        .call(function(d) { d.enter().append("text")})
        .call(function(d) { d.exit().remove()})
        .attr("y",function(d,i) { return i+"em"})
        .attr("x","1em")
        .text(function(d) { ;return d.key})
    
    li.selectAll("circle")
        .data(items,function(d) { return d.key})
        .call(function(d) { d.enter().append("circle")})
        .call(function(d) { d.exit().remove()})
        .attr("cy",function(d,i) { return i-0.25+"em"})
        .attr("cx",0)
        .attr("r","0.4em")
        .style("fill",function(d) { 
            // console.log(d.value.color);
            return d.value.color})  
    
    // Reposition and resize the box
    var lbbox = li[0][0].getBBox()  
    lb.attr("x",(lbbox.x-legendPadding))
        .attr("y",(lbbox.y-legendPadding))
        .attr("height",(lbbox.height+2*legendPadding))
        .attr("width",(lbbox.width+2*legendPadding))
  })
  return g
}
})()
