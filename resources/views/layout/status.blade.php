@switch($status)
    @case('waiting')
        <span class="py-3">Aguardando aprovação</span>
    @break

    @case('reproved')
        <span class="t-danger py-3">Reprovado</span>
    @break

    @case('approved')
        <span class="t-success py-3">Aprovado</span>
    @break
@endswitch
