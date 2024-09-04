@extends('layouts.backend.master')
@section('content')
<div>
    <div class="content-wrapper">
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Add Task</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Add Task</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
    <section class="content">
        <form wire:submit.prevent="add">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">General</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputName">Task Name</label>
                    <input type="text" id="inputName" wire:model="task_name" class="form-control">
                    @error('task_name')
                        <span class ="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="inputName">Task Detail</label>
                    <input type="text" id="inputName" wire:model="task_detail" class="form-control">
                    @error('task_detail')
                        <span class ="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="inputName">Start Date</label>
                    <input type="date" id="inputName" wire:model="task_start_date" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputName">Due Date</label>
                    <input type="date" id="inputName" wire:model="task_due_date" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputName">File</label>
                    <input type="file" id="inputName" wire:model="task_file" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputStatus">Task Type</label>
                    <select id="inputStatus" wire:model="task_type" class="form-control custom-select">
                      <option selected >Select one</option>
                      <option value="computer">ประชุม</option>
                      <option value="electric">ลาป่วย</option>
                      <option value="plant">ไปราชการ</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputStatus">Status</label>
                    <select id="inputStatus" wire:model="status_task" class="form-control custom-select">
                      <option selected >Select one</option>
                      <option value="computer">เสร็จ</option>
                      <option value="electric">ยังไม่เสร็จ</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>

          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            No.
                        </th>
                        <th style="width: 20%">
                            Task Name
                        </th>
                        <th style="width: 20%">
                            Task Detail
                        </th>
                        <th style="width: 20%">
                            Start Date
                        </th>
                        <th style="width: 20%">
                            Due Date
                        </th>
                        <th style="width: 20%">
                            Task Type
                        </th>
                        <th style="width: 8%" class="text-center">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($data as $item)
                  <tr>
                        <td>
                            {{$item->id}}
                        </td>
                        <td>
                            <a>
                                {{$item->task_name}}
                            </a>
                        </td>
                        <td>
                            <a>
                                {{$item->task_detail}}
                            </a>
                        </td>
                        <td>
                            <a>
                                {{$item->task_start_date}}
                            </a>
                        </td>
                        <td>
                            <a>
                                {{$item->task_due_date}}
                            </a>
                        </td>
                        <td>
                            <a>
                                {{$item->task_type}}
                            </a>
                        </td>
                        <td>
                            <a>
                                {{$item->status_task}}
                            </a>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="{#}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" wire:click="delete({{$item->id}})" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>

          <div class="row">
            <div class="col-12">
              <a href="#" class="btn btn-secondary">Cancel</a>
              <button type="submit" class="btn btn-success ">Add</button>
            </div>

          </div>
          </form>
    </section>

        <!-- /.content -->
      </div>
    </div>
    @endsection
