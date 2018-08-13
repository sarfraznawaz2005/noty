@if(session()->has('noty.messages'))
    <script type="text/javascript">

        Noty.overrideDefaults({
            theme: '{{session('noty.config.theme')}}',
            layout: '{{session('noty.config.layout')}}',
            timeout: '{{session('noty.config.timeout')}}',
            progressBar: '{{session('noty.config.progressBar')}}',
            closeWith: [{!! extractQuoted(session('noty.config.closeWith')) !!}],
            animation: {
                open: 'animated {{session('noty.config.animation.open')}}',
                close: 'animated {{session('noty.config.animation.close')}}'
            },
            sounds: {
                sources: [{!! extractQuoted(session('noty.config.sounds.sources')) !!}],
                volume: '{{session('noty.config.sounds.volume')}}',
                conditions: [{!! extractQuoted(session('noty.config.sounds.conditions')) !!}]
            },
            docTitle: {
                conditions: [{!! extractQuoted(session('noty.config.docTitle.conditions')) !!}]
            },
            modal: '{{session('noty.config.modal')}}',
            force: '{{session('noty.config.force')}}',
            queue: '{{session('noty.config.queue')}}',
            maxVisible: '{{session('noty.config.maxVisible')}}',
            killer: '{{session('noty.config.killer')}}',
            container: '{{session('noty.config.container') ?: ''}}',
            id: '{{session('noty.config.id') ?: ''}}'
        });

        (function () {
            @foreach (session('noty.messages') as $item)
            new Noty({
                text: '{{ $item['text'] }}',
                type: '{{ $item['type'] }}'
            }).show();
            @endforeach
        })();
    </script>
@endif
