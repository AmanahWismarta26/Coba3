@extends('layout.index')

@section('tittle', 'List Post')

@section('content')
    <section class="section">
        <div class="section-header">
        <h1>List Post</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
            <div class="breadcrumb-item">List Post</div>
        </div>
        </div>

        <div class="section-body">
            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data List</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

        <div class="section-body">
            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data List</h4>
                  </div>
                    <div class="card">
                        <div class="card-header">
                    <h4>Filter</h4>
                    </div>
                    <div class="card-body">
                            <form action="{{route('post.index') }}" method="GET">
                                <div class="row">
                                    <div class="form-grup col-4">
                                    <label for="">Post Name</label> 
                                    <input type="text" name="q" class="form-control" placeholder="Post name">
                    </div>   
                    <div class="form-group col-4">
                        <label for="">Status</label>
                        <select name="status" class="form-control">
                            <option value="" selected>All</option>
                            <option value="0">Draft</option>
                            <option value="1">Publish</option>
                    </select>
                    </div>

                    <div class="form-grup col-4">
                    <label for="">Start Date</label> 
                    <input type="date" class="form-control">
                    </div>

                    <div class="form-grup col-4">
                    <label for="">End Date</label> 
                    <input type="date" name="to-date" class="form-control">
                    </div>

                    <div class="form-grup col-4">
                    <button class="btn btn-primary">Filter</button>
                    </div>
                </div>
</div>
            </form>
        </div>
    </div> 

                            @php
                                $no = 1
                            @endphp
                            @forelse ($data as $val)
                                <tr>
                                    <td>{{ $no ++ }}</td>
                                    <td>
                                        <img src="{{ $val->photo }}" alt="" width="50px">
                                    </td>
                                    <td>{{ $val->tittle }}</td>
                                    <td>
                                        @if ($val->is_active == 1)
                                            <div class="badge badge-success">Active</div>
                                        @else
                                            <div class="badge badge-danger">Non-Active</div>
                                        @endif
                                    </td>
                                    <td>{{ $val->created_at->format('Y-m-d') }}</td>
                                    <td>
                                        <a href="#" class="btn btn-secondary">Detail</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">
                                        tidak ada data
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                      </table>
                    </div>
                    <ul class="pagination mb-0 pt-5">
                        {!! $data->links('components.pagination') !!}
                    </ul>
                  </div>
                </div>
              </div>
        </div>
    </section>
@endsection