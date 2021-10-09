@switch($type)
    @case('admin')
        <td>Admnistrador</td>
    @break

    @case('solicitor')
        <td>Solicitador</td>
    @break

    @case('approver')
        <td>Aprovador</td>
    @break
@endswitch
