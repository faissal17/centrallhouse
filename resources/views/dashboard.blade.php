<x-app-layout>

    <head>
        <link rel="stylesheet" href="./css/rooms.css">
    </head>


    <section class="site-hero inner" id="rooms" style="background-image:url('./images/Morocco.jpg')">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center" data-aos="fade">
                    <p class="heading mb-3">Welcome back <span class="username">{{ auth()->user()->name }}</span></p>
                   <a href="{{asset('createroom')}}"><button type="button" class="btn btn-outline-warning">Add Room</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <!--start of checking avilibility -->
    <x-check/>
    <!--end of checking avilibility -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">

            @foreach ($rooms as $room)

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="Image">
                            <img src="cover/{{$room->cover}}">
                            <small class="position-absolute start-0 top-100 translate-middle-y bg-danger text-white rounded py-1 px-3 ms-4">${{$room->price}}/Night</small>
                            </div>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">{{$room->name}}</h5>
                            </div>
                            <div class="d-flex mb-3">
                                <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>{{$room->bed}} Bed</small>
                                <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>{{$room->bath}} Bath</small>
                                <small><i class="fa fa-hotel text-primary me-2"></i>{{$room->room}} Rooms</small>

                                @if ($room->availible)

                                    <small class="border-start ms-3 ps-3 text-success">Availible</small>

                                @else

                                    <small class="border-start ms-3 ps-3 text-warning">Not Availible</small>

                                @endif

                            </div>
                            <p class="text-body mb-3">{{$room->description}}</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="#modal-task" data-bs-toggle="modal">View Detail</a>
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href="/editroom/{{$room->id}}">Edit Room</a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

            </div>
        </div>
    </div>

      <!-- Modal -->
      <div class="modal fade" id="modal-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" id="form-task">
					<div class="modal-header">
						<h5 class="modal-title">Add</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
						<!-- This Input Allows Storing Task Index  -->
						<input type="hidden" name="name">
						<div class="mb-3">
							<label class="form-label">Title</label>
							<input type="text" name="title" class="form-control title_tasks" id="task-title" />
						</div>
						<div class="mb-3">
							<label class="form-label">Type</label>
							<div class="ms-3">
								<div class="form-check mb-1">
									<input class="form-check-input task_feature" name="tasktype" type="radio" value="1" id="tasktypefeature" checked />
									<label class="form-check-label" for="task-type-feature">Feature</label>
								</div>
								<div class="form-check">
									<input class="form-check-input task_bug" name="tasktype" type="radio" value="2" id="tasktypebug" />
									<label class="form-check-label" for="task-type-bug">Bug</label>
								</div>
							</div>

						</div>
						<div class="mb-3">
							<label class="form-label">Priority</label>
							<select name="priority" class="form-select task_priority" id="task-priority">
								<option value="">Please select</option>
								<option value="1">Low</option>
								<option value="2">Medium</option>
								<option value="3">High</option>
								<option value="4">Critical</option>
							</select>
						</div>
						<div class="mb-3">
							<label class="form-label">Status</label>
							<select name="status" class="form-select task_type" id="task-status">
								<option value="">Please select</option>
								<option value="1">To Do</option>
								<option value="2">In Progress</option>
								<option value="3">Done</option>
							</select>
						</div>
						<div class="mb-3">
							<label class="form-label">Date</label>
							<input name="date" type="datetime-local" class="form-control task_datetime" id="task-date" />
						</div>
						<div class="mb-0">
							<label class="form-label">Description</label>
							<textarea name="description" class="form-control description" rows="10" id="task-description"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="book" class="btn btn-primary task-action-btn" id="task-delete-btn">Book Now</a>
					</div>
				</form>
			</div>
		</div>
	</div>

    <x-footer/>

</x-app-layout>
