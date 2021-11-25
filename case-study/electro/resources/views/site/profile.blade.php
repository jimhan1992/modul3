@include('site.core.head')
<!-- HEADER -->
@include('site.core.header')
<!-- /HEADER -->

<!-- NAVIGATION -->
@include('site.core.nav')
<!-- /NAVIGATION -->
<div class="container">
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profile</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                 src="{{ asset('admin1/dist/img/user1-128x128.jpg')  }}"
                                 alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">{{$user->name}}</h3>

                        <p class="text-muted text-center">{{$user->role}}</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Followers</b> <a class="float-right">1,322</a>
                            </li>
                            <li class="list-group-item">
                                <b>Following</b> <a class="float-right">543</a>
                            </li>
                            <li class="list-group-item">
                                <b>Friends</b> <a class="float-right">13,287</a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
{{--                <div class="card card-primary">--}}
{{--                    <div class="card-header">--}}
{{--                        <h3 class="card-title">About Me</h3>--}}
{{--                    </div>--}}
{{--                    <!-- /.card-header -->--}}
{{--                    <div class="card-body">--}}
{{--                        <strong><i class="fas fa-book mr-1"></i> Education</strong>--}}

{{--                        <p class="text-muted">--}}
{{--                            B.S. in Computer Science from the University of Tennessee at Knoxville--}}
{{--                        </p>--}}

{{--                        <hr>--}}

{{--                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>--}}

{{--                        <p class="text-muted">Malibu, California</p>--}}

{{--                        <hr>--}}

{{--                        <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>--}}

{{--                        <p class="text-muted">--}}
{{--                            <span class="tag tag-danger">UI Design</span>--}}
{{--                            <span class="tag tag-success">Coding</span>--}}
{{--                            <span class="tag tag-info">Javascript</span>--}}
{{--                            <span class="tag tag-warning">PHP</span>--}}
{{--                            <span class="tag tag-primary">Node.js</span>--}}
{{--                        </p>--}}

{{--                        <hr>--}}

{{--                        <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>--}}

{{--                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam--}}
{{--                            fermentum enim neque.</p>--}}
{{--                    </div>--}}
{{--                    <!-- /.card-body -->--}}
{{--                </div>--}}
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
{{--                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a>--}}
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Orders</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                            </li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class=" tab-pane" id="activity">
                                <!-- Post -->
                            {{--                                <div class="post">--}}
                            {{--                                    <div class="user-block">--}}
                            {{--                                        <img class="img-circle img-bordered-sm"--}}
                            {{--                                             src="{{asset('admin1/dist/img/user1-128x128.jpg')}}" alt="user image">--}}
                            {{--                                        <span class="username">--}}
                            {{--                          <a href="#">Jonathan Burke Jr.</a>--}}
                            {{--                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>--}}
                            {{--                        </span>--}}
                            {{--                                        <span class="description">Shared publicly - 7:30 PM today</span>--}}
                            {{--                                    </div>--}}
                            {{--                                    <!-- /.user-block -->--}}
                            {{--                                    <p>--}}
                            {{--                                        Lorem ipsum represents a long-held tradition for designers,--}}
                            {{--                                        typographers and the like. Some people hate it and argue for--}}
                            {{--                                        its demise, but others ignore the hate as they create awesome--}}
                            {{--                                        tools to help create filler text for everyone from bacon lovers--}}
                            {{--                                        to Charlie Sheen fans.--}}
                            {{--                                    </p>--}}

                            {{--                                    <p>--}}
                            {{--                                        <a href="#" class="link-black text-sm mr-2"><i--}}
                            {{--                                                class="fas fa-share mr-1"></i> Share</a>--}}
                            {{--                                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i>--}}
                            {{--                                            Like</a>--}}
                            {{--                                        <span class="float-right">--}}
                            {{--                          <a href="#" class="link-black text-sm">--}}
                            {{--                            <i class="far fa-comments mr-1"></i> Comments (5)--}}
                            {{--                          </a>--}}
                            {{--                        </span>--}}
                            {{--                                    </p>--}}

                            {{--                                    <input class="form-control form-control-sm" type="text"--}}
                            {{--                                           placeholder="Type a comment">--}}
                            {{--                                </div>--}}
                            <!-- /.post -->

                                <!-- Post -->
                            {{--                                <div class="post clearfix">--}}
                            {{--                                    <div class="user-block">--}}
                            {{--                                        <img class="img-circle img-bordered-sm"--}}
                            {{--                                             src="{{asset('admin1/dist/img/user7-128x128.jpg')}}" alt="User Image">--}}
                            {{--                                        <span class="username">--}}
                            {{--                          <a href="#">Sarah Ross</a>--}}
                            {{--                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>--}}
                            {{--                        </span>--}}
                            {{--                                        <span class="description">Sent you a message - 3 days ago</span>--}}
                            {{--                                    </div>--}}
                            {{--                                    <!-- /.user-block -->--}}
                            {{--                                    <p>--}}
                            {{--                                        Lorem ipsum represents a long-held tradition for designers,--}}
                            {{--                                        typographers and the like. Some people hate it and argue for--}}
                            {{--                                        its demise, but others ignore the hate as they create awesome--}}
                            {{--                                        tools to help create filler text for everyone from bacon lovers--}}
                            {{--                                        to Charlie Sheen fans.--}}
                            {{--                                    </p>--}}

                            {{--                                    <form class="form-horizontal">--}}
                            {{--                                        <div class="input-group input-group-sm mb-0">--}}
                            {{--                                            <input class="form-control form-control-sm" placeholder="Response">--}}
                            {{--                                            <div class="input-group-append">--}}
                            {{--                                                <button type="submit" class="btn btn-danger">Send</button>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </form>--}}
                            {{--                                </div>--}}
                            <!-- /.post -->

                                <!-- Post -->
                            {{--                                <div class="post">--}}
                            {{--                                    <div class="user-block">--}}
                            {{--                                        <img class="img-circle img-bordered-sm"--}}
                            {{--                                             src="{{asset('admin1/dist/img/user6-128x128.jpg')}}" alt="User Image">--}}
                            {{--                                        <span class="username">--}}
                            {{--                          <a href="#">Adam Jones</a>--}}
                            {{--                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>--}}
                            {{--                        </span>--}}
                            {{--                                        <span class="description">Posted 5 photos - 5 days ago</span>--}}
                            {{--                                    </div>--}}
                            {{--                                    <!-- /.user-block -->--}}
                            {{--                                    <div class="row mb-3">--}}
                            {{--                                        <div class="col-sm-6">--}}
                            {{--                                            <img class="img-fluid" src="{{asset('admin1/dist/img/photo1.png')}}"--}}
                            {{--                                                 alt="Photo">--}}
                            {{--                                        </div>--}}
                            {{--                                        <!-- /.col -->--}}
                            {{--                                        <div class="col-sm-6">--}}
                            {{--                                            <div class="row">--}}
                            {{--                                                <div class="col-sm-6">--}}
                            {{--                                                    <img class="img-fluid mb-3"--}}
                            {{--                                                         src="{{asset('admin1/dist/img/photo2.png')}}" alt="Photo">--}}
                            {{--                                                    <img class="img-fluid"--}}
                            {{--                                                         src="{{asset('admin1/dist/img/photo3.jpg')}}" alt="Photo">--}}
                            {{--                                                </div>--}}
                            {{--                                                <!-- /.col -->--}}
                            {{--                                                <div class="col-sm-6">--}}
                            {{--                                                    <img class="img-fluid mb-3"--}}
                            {{--                                                         src="{{asset('admin1/dist/img/photo4.jpg')}}" alt="Photo">--}}
                            {{--                                                    <img class="img-fluid"--}}
                            {{--                                                         src="{{asset('admin1/dist/img/photo1.png')}}" alt="Photo">--}}
                            {{--                                                </div>--}}
                            {{--                                                <!-- /.col -->--}}
                            {{--                                            </div>--}}
                            {{--                                            <!-- /.row -->--}}
                            {{--                                        </div>--}}
                            {{--                                        <!-- /.col -->--}}
                            {{--                                    </div>--}}
                            {{--                                    <!-- /.row -->--}}

                            {{--                                    <p>--}}
                            {{--                                        <a href="#" class="link-black text-sm mr-2"><i--}}
                            {{--                                                class="fas fa-share mr-1"></i> Share</a>--}}
                            {{--                                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i>--}}
                            {{--                                            Like</a>--}}
                            {{--                                        <span class="float-right">--}}
                            {{--                          <a href="#" class="link-black text-sm">--}}
                            {{--                            <i class="far fa-comments mr-1"></i> Comments (5)--}}
                            {{--                          </a>--}}
                            {{--                        </span>--}}
                            {{--                                    </p>--}}

                            {{--                                    <input class="form-control form-control-sm" type="text"--}}
                            {{--                                           placeholder="Type a comment">--}}
                            {{--                                </div>--}}
                            <!-- /.post -->
                            </div>
                            <!-- /.tab-pane -->
                            <div class="active tab-pane" id="timeline">
                                <!-- The timeline -->
                                <div class="timeline timeline-inverse">
                                    @if($order!=null)
                                        @foreach($order as $item)
                                            <div class="time-label">
                                                    <span
                                                        class="bg-success">{{$item->created_at->format('d/m/Y')}}</span>
                                            </div>
                                            <!-- /.timeline-label -->
                                            <!-- timeline item -->
                                            <div>
                                                <i class="fas fa-shopping-cart bg-purple"></i>

                                                <div class="timeline-item">

                                                    <h3 class="timeline-header"><a
                                                            href="#">{{$item->user->name}}</a></h3>

                                                    <div class="timeline-body">
                                                        <table class="table table-hover">
                                                            <tr>
                                                                <th>Image</th>
                                                                <th>Name Product</th>
                                                                <th>Quantity</th>
                                                                <th>Price</th>
                                                                <th>Total Price</th>
                                                            </tr>
                                                            <input type="hidden" value="{{ $total = 0}}">
                                                            @forelse($order_detail as $key => $order)
                                                                <tr>
                                                                    <td><img
                                                                            src="{{asset('storage/'.$order->product->image)}}"
                                                                            alt="" width="50"></td>
                                                                    <td><a href="{{route('detail',$order->product->id)}}">{{$order->product->name}}</a></td>
                                                                    <td>{{$order->quantity}}</td>
                                                                    <td>${{$order->price}}</td>
                                                                    <td>${{$order->quantity*$order->price}}</td>
                                                                </tr>
                                                                <input type="hidden"
                                                                       value="{{$total += $order->quantity*$order->price}}">
                                                            @empty
                                                                <tr>
                                                                    No Data
                                                                </tr>

                                                            @endforelse
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td style="text-align: right">SUM:</td>
                                                                <td>${{$total}}</td>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="timeline-body">
                                            No data
                                        </div>
                                @endif
                                <!-- END timeline item -->
                                    <div>
                                        <i class="far fa-clock bg-gray"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Full Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName"
                                                   value="{{$user->name}}" name="name">
                                            @error('name')
                                            <p class="alert-danger">{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail"
                                                   value="{{$user->email}}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Avata</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="inputName2"
                                                   placeholder="Name" name="image">
                                        </div>
                                        @error('avata')
                                        <p class="alert-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Phone</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="inputSkills"
                                                   placeholder="Phone" name="phone">
                                        </div>
                                        @error('phone')
                                        <p class="alert-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputSkills"
                                                   placeholder="Address" name="address">
                                        </div>
                                        @error('address')
                                        <p class="alert-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@include('site.core.footer')
