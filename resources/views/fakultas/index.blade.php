@extends('adminlte::page')

@section('title', 'Data Sekolah')

@section('content_header')
    <h1>DATA SEKOLAH</h1>
@stop

@section('content')
                        <a href="{{ route('fakultas.create') }}" class="btn btn-md btn-success mb-3">TAMBAH FAKULTAS</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NAMA FAKULTAS</th>
                                <th scope="col">PIMPINAN FAKULTAS</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($dataFakultas as $fakultas)
                                <tr>
                                    <td>{{ $fakultas->id }}</td>
                                    <td>{{ $fakultas->nama_fakultas }}</td>
                                    <td>{{ $fakultas->pimpinan_fakultas }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('fakultas.destroy', $fakultas->id) }}" method="POST">
                                            <a href="{{ route('fakultas.show', $fakultas->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                            <a href="{{ route('fakultas.edit', $fakultas->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <tr>
                                      <td colspan="4" class="text-center">Data Fakultas belum Tersedia.</td>
                                  </tr>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $dataFakultas->links() }} <!-- Memanggil links() untuk menampilkan pagination -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop