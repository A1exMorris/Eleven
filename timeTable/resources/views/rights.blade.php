@extends('layouts.app')

@section('content')
<div class="container">


            <div class="row pb-2">
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                    @foreach($roles as $role)
                    <div class="col-sm-2">{{$role->name}}</div>
                    @endforeach
            </div>
            @foreach($users as $user)
                <div class="row">
                <form action="/roles" method="post">

                            <div class="col-sm-2">{{ $user->name }}</div>
                            <div class="col-sm-2">{{ $user->email }}<input type="hidden" name="email" value="{{ $user->email }}"></div>

                            @foreach($roles as $role)
                            <div class="col-sm-2"> <input type="checkbox" {{ $user->hasRole($role->name) ? 'checked' : '' }} name="role_{{ strtolower($role->name)}}"> </div>
                            @endforeach
                            {{csrf_field()}}
                            <div class="col-sm-2"><button type="Submit" >Assign Role</button></div>
                </form>
                </div>
            @endforeach
{{--            </tbody>
        </table>--}}


</div>
@endsection