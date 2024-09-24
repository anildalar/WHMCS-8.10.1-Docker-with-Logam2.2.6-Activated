<a href="#" id="toggleHistory" class="btn btn-default row">{$MGLANG->T('History')}</a>
<div id="ABASHistory" class="APUHistory row" style="display: none;">
    <table class="table table-bordered" style="font-size: 12px; margin-top: 10px;">
        <thead>
            <tr>
                <th>{$MGLANG->T('Date')}</th>
                <th>{$MGLANG->T('Type')}</th>
                <th>{$MGLANG->T('Old Option')}</th>
                <th>{$MGLANG->T('New Option')}</th>
                <th>{$MGLANG->T('Message')}</th>
            </tr>
        </thead>

        <tbody>
            <tr data-prototype style='display: none;'>
                <td data-date></td>
                <td data-type></td>
                <td data-oldOption></td>
                <td data-newOption></td>
                <td data-status></td>
            </tr>
        </tbody>
    </table>
    <nav class="text-center">
        <ul class="pagination" style="display:none;">
            <li class="disabled ASNotificationPrevBtn padding-right-5" data-first>
                <a href="#">{$MGLANG->T('Prev')}</a>
            </li>

            <li class="disabled ASNotificationNextBtn" data-last>
                <a href="#">{$MGLANG->T('Next')}</a>
            </li>
        </ul>
    </nav>
</div>
            