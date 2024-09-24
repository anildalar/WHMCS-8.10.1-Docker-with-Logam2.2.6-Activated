<?php
return
[
    "resources" =>
    [
        "memory"  =>
        [
            "name"          => ["memory.usage", 'memory'],
            "config"        =>
            [
                "aggregation"   => "mean",
                "granularity"   => 300,
            ]
        ],
        "cpuUtil" =>
        [
            "name"          => ["cpu_util", 'cpu'],
            "config"        =>
            [
                "aggregation"   => "rate:mean",
                "granularity"   => 300,
            ]
        ],
        "incomingMegaBytes" =>
        [
            "name"          => ["network.incoming.bytes"],
            "config"        =>
            [
                "aggregation"   => "mean",
                "granularity"   => 300,
            ]
        ],
        "outgoingMegaBytes" =>
        [
            "name"          => ["network.outgoing.bytes"],
            "config"        =>
            [
                "aggregation"   => "mean",
                "granularity"   => 300,
            ]
        ],
        "diskRootGBSize" =>
        [
            "name"          => ["disk.device.usage"],
            "config"        =>
            [
                "aggregation"   => "mean",
                "granularity"   => 300,
            ]
        ],
        "diskReadRequests" =>
        [
            "name"          => ["disk.device.read.requests"],
            "config"        =>
            [
                "aggregation"   => "mean",
                "granularity"   => 300,
            ]
        ],
        "diskWriteRequests" =>
        [
            "name"          => ["disk.device.write.requests"],
            "config"        =>
            [
                "aggregation"   => "mean",
                "granularity"   => 300,
            ]
        ],
    ]
];