@push('scripts')
    <script>
        $(() => {
            Inputmask({
                mask: [
                    '(99)9999-9999',
                    '(99)99999-9999',
                ],
                keepStatic: true
            }).mask(document.getElementById('cellphone'));
        });
    </script>
@endpush
