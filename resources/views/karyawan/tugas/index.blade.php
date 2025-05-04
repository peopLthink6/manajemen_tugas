@extends('layouts.app')


@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-user-alt mr-2"></i>
        {{ $title }}
    </h1>


    <div class="card">       
        <div class="card-header d-flex flex-wrap justify-content-center justify-content-xl-between">
            <div class="mb-1 mr-2">
            </div>
            <div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item {{ $menuAdminTugas ?? '' }}">
                <a class="nav-link" href="{{ route('tugas') }}">
                    <i class="fas fa-tasks"></i>
                    <span>Data Tugas</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            @if (auth(0)->user()->is_tugas == true)
            <a href="{{ route('tugasPdf') }}" class="btn btn-sm btn-danger" target="__blank">
                <i class="fas fa-file-excel mr-2"></i>
                PDF
            </a>
            @endif
        </div>
        </div>


            <div class="table-responsive">
                    <thead class="bg-primary text-white">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th>Status</th>
                            <th>
                                <i class="fas fa-cog"></i>
                            </th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($user as $item)
                        <tr>
                            <td class="text-center"> {{ $loop->iteration }}</td>
                            <td> {{ $item->nama}}</td>
                            <td class="text-center">
                                <span class="badge badge-primary">
                                {{ $item->email}}
                            </span>
                            </td>
                            <td class="text-center">
                                @if ($item->is_tugas == false)
                                    <span class="badge badge-danger">
                                    Belum Ditugaskan
                                    </span>   
                                @else
                                    <span class="badge badge-succes">
                                    Sudah Ditugaskan
                                    </span>
                                @endif
                                
                            </td>
                            <td class="text-center">
                                @if ($item->jabatan == 'Admin')
                                    <span class="badge badge-succes">{{$item->jabatan}}</span>
                                @else
                                    <span class="badge badge-succes">{{$item->jabatan}}</span>
                                @endif
                            </td>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('userEdit', $item->id) }}" 
                                class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button  class="btn btn-sm btn-danger"
                                data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa-trash"></i>
                                </button>
                                @include('admin/user/modal')
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="card-body">

        @if (auth(0)->user()->is_tugas == true)
        <div class="row">
            <div class="col-6">
                Nama
            </div>
            <div class="col-6">
                :{{ $tugas->user->nama }}
            </div>
        </div>   

        <div class="row">
            <div class="col-6">
                Email
            </div>
            <div class="col-6">
                :
                <span class="badge badge-primary">
                    {{ $tugas->user->email }}
                </span>
            </div>

            <div class="col-6">
                Tugas
            </div>
            <div class="col-6">
                :{{ $tugas->tugas }}
            </div>
        </div> 

        <div class="col-6">
            Tanggal Mulai
        </div>
        <div class="col-6">
            :
            <span class="badge badge-info">
                {{ $tugas->tanggal_mulai }}
            </span>
            </div>
        </div> 

        <div class="col-6">
            Tanggal Selesai
        </div>
        <div class="col-6">
            :
            <span class="badge badge-info">
                {{ $tugas->tanggal_selesai }}
            </span>
            </div>
        </div> 




        @else
            <div class="row">
                <div class="col-6">
                    Status
                </div>
                <div class="col-6">
                    :
                    <span class="badge badge-danger">
                        Belum Ditugaskan
                    </span>
                </div>
            </div>
        @endif
        
        <div class="row">
            <div class="col-6">
                Nama
            </div>
            <div class="col-6">
                :{{ $tugas->user->nama }}
            </div>
        </div>
    </div>
@endsection