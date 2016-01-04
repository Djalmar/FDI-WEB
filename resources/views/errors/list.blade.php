
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        {{--<strong>Ups!</strong> --}}
                        Existen problemas con los datos que ingresaste.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif