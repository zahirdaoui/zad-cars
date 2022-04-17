@extends('layouts.dashboard')

@section('ContentDashboard')
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <div class="table-data__tool">
        <div class="table-responsive table-responsive-data2">
            <h3 class="text-center py-5">liste admin dans le sete web</h3>
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>images</th>
                        <th>nom</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>role</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataAdmins as $item)
                    <tr class="tr-shadow">
                        <td>
                            @if ($item->img !== ' ')
                              <img width="40px" height="40px" src="{{url('dataimg/adminimg/')}}/{{$item->img}}">
                           @else
                              <img width="40px" height="40px" src="{{url('dataimg/noimage/no-image.png')}}">
                            @endif
                        </td>
                        <td>{{$item->name}}</td>
                        <td>
                            <span class="block-email">{{$item->email}}</span>
                        </td>
                        <td class="desc">{{$item->number_phone}}</td>
                        <td>
                            <span class="status--process">admin</span>
                        </td>
                        <td>
                            <div class="table-data-feature">
                                <a href="{{route('admin.acount.admin',"$item->id")}}" class="item" data-toggle="tooltip" data-placement="top" title="Modifier">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                <form action="{{route('admin.delete.admin',"$item->id")}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <button class="item" type="submit" data-toggle="tooltip" data-placement="top" title="supprimer">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                    @empty
                    <h1 class="text-center">Il n'y a pas de données</h1>
                    @endforelse
             </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <div class="table-data__tool">
        <div class="table-responsive table-responsive-data2">
            <h3 class="text-center py-5">liste user login</h3>
            <table class="table table-data2">

                    @if ($dataUsers->count()>0)
                    <thead>
                    <tr>
                        <th>nom</th>
                        <th>email</th>
                        <th>role</th>
                        <th></th>
                    </tr>
                </thead>

                    @endif


                <tbody>
                    @forelse ($dataUsers as $item)
                    <tr class="tr-shadow">
                        <td>{{$item->name}}</td>
                        <td>
                            <span class="block-email">{{$item->email}}</span>
                        </td>
                        <td>
                            <span class="status--process">user</span>
                        </td>
                        <td>
                            <div class="table-data-feature">
                                <form action="{{route('admin.rols.user',"$item->id")}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <button class="item" type="submit" data-toggle="tooltip" data-placement="top" title="accepter">
                                        <i class="fa-solid fa-square-check"></i>
                                    </button>
                                </form>
                                <form action="{{route('admin.delete.user',"$item->id")}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <button class="item" type="submit" data-toggle="tooltip" data-placement="top" title="suprimer">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                    @empty
                    <h1 class="text-center">Il n'y a pas de données</h1>

                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
@endsection
