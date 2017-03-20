
    <script>
        window.Laravel.URLto = {!! json_encode(URL::to('/@{{short}}')) !!};
    </script>

    <div class="row" id="main-panel">
        <div class="col-md-offset-2 col-md-8">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">URLs</h3>
                </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">

                @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Description</th>
                            <th>URL</th>                                
                            <th>Accesses</th>                                
                            <th>Copy</th>                                
                            <th>Delete</th>   
                        </tr>
                    </thead>                

                    <tbody id="table-body">
                    </tbody>                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </div>

{{-- @endsection

@push('script')

    <script>
        $( document ).ready(function() {
            let baseUrl = window.Laravel.URLto;

            $('#nav-listaURL').addClass('selected');

            let urls = [];
            axios.get('/api/url').then((response) => {
                response.data.forEach((url) => {
                    let short_url = _.replace(baseUrl, '@{{short}}', url.short);

                    $('#table-body').append(`
                        <tr>
                            <th scope="row">${url.id}</th>
                            <th>${url.description}</th>
                            <th><a target="_blank" href="${short_url}">${short_url}</a></th>                                
                            <th id="url_${url.id}">${url.counter}</th>
                            <th>
                                <button class="btn btn-default btn_copiar" value="${short_url}">Copy</button>
                            </th>  
                            <th>
                                <button class="btn btn-default btn_remover" value="${url.id}"><i class="fa fa-trash-o"></i></button>                                        
                            </th>  
                        </tr>                
                    `);
                });   

                $('.btn_copiar').click((event) => {
                    var $temp = $("<input>");
                    $("body").append($temp);
                    $temp.val(event.target.value).select();
                    document.execCommand("copy");
                    $temp.remove();
                });

                $('.btn_remover').click((event) => {
                    if(confirm('Tem certeza que deseja remover?')){
                        axios.delete('/url/'+event.target.value)
                            .then(() => {
                                location.reload();
                            });
                    } 
                });

                $('#main-panel').fadeIn();
            });
        });
    
    </script>
@endpush --}}