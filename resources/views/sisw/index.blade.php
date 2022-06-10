@extends('layout.main')
@section('header')
<h1>Data Mahasiswa</h1>
@endsection
@section('konten')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
       
        <div class="row">
            @foreach ($sisw as $siswa)
                <div class="col-sm-6">
                <div class="mb-4">
                    <div class="card ">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">{{ $siswa->nama }}</h5>
                                    <h6 class="card-title">{{ $siswa->nim }}</h6>
                                    <h6 class="card-title">{{ $siswa->alamat }}</h6>
                                </div>
                            
                                <div class="col">
                                    <form action="{{ route('sisw.destroy',$siswa->id) }}" method="POST">
                                        <a class="fa fa-pencil" href="{{ route('sisw.edit',$siswa->id) }}"></a>
                                        @csrf
                                        @method('DELETE')
                                        <button  type="submit"  class="btn" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></button>
                                    </form>
                                    <span>{{ $siswa->email }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
        
    </table><br><br><br>
@endsection