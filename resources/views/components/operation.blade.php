<tr>
    <td width="50" class="ps-3">
    </td>
    <td>
        <time datetime="{{$transaction->date_transaction}}" class="d-block fst-italic fw-light">{{$transaction->date_transaction}}</time>
        {{$transaction->name}}
    </td>
    <td class="text-end">
        <span class="rounded-pill text-nowrap bg-warning-subtle px-2">
        {{$transaction->amount}} €
        </span>
    </td>
    <td class="text-end text-nowrap">
        <a href="{{route('edit', $transaction->id)}}" class="btn btn-outline-primary btn-sm rounded-circle">
            <i class="bi bi-pencil"></i>
        </a>
        <a href="{{route('destroy', $transaction->id)}}" class="btn btn-outline-danger btn-sm rounded-circle">
            <i class="bi bi-trash"></i>
        </a>
    </td>
</tr>