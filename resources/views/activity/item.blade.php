@if($target)
    <tr class="d-table-row target-activity-item list-group-item">
        <td>{{ $target->title ?? '' }}</td>
        <td>-----</td>
        <td>-----</td>
    </tr>
@endif
