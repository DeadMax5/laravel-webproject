@extends('theme.master')
@section('title', 'الرئيسية')
@section('home-active', 'active')
@section('contact-title', 'active')

@section('content')





    @if(session('error'))
        <div class="alert alert-danger text-center">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <form action="{{ route("stories.store") }}" method="POST" id="storyForm">
                        @csrf
                        <div class="row mb-3" dir="rtl">
                            <div class="col">
                                <input type="text" class="form-control" name="job_title" placeholder="الاسم الكامل ">
                            </div>
                        </div>
                        <div class="row mb-3" dir="rtl">
                            <div class="col">
                                <input type="text" class="form-control" name="job_title" placeholder="العنوان الوضيفي">
                            </div>
                        </div>

                        <div class="row mb-3" dir="rtl">
                            <div class="col">
                                <select class="form-select" name="type_story">
                                    <option selected> نوع القصة</option>
                                    @foreach ($story_types as $story_type)
                                        <option value="{{ $story_type->id }}"> {{ $story_type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-select" name="taskels">
                                    <option selected> التشكيلات</option>
                                    @foreach ($taskels as $tashkel)
                                        <option value="{{ $tashkel->id }}"> {{ $tashkel->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>




                        <div class="my-3">
                            <textarea name="summry_story" class="form-control" rows="4" placeholder="ملخص القصة"
                                dir="rtl"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                    <div class="text-center">
                        <button type="submit" name="action" value="save" class="btn btn-primary">حفظ</button>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



    </div>
    </div>

    <div class="container mt-5" dir="rtl">
        <h3 class="mb-3">القصص المحفوظة</h3>
        <table class="table table-bordered table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th>العنوان الوظيفي</th>
                    <th>نوع القصة</th>
                    <th>التشكيل</th>
                    <th>الملخص</th>
                    <th>تحميل PDF</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stories as $story)
                    <tr>
                        <td>{{ $story->job_title }}</td>
                        <td>{{ $story->storyType->name ?? '---' }}</td>
                        <td>{{ $story->taskel->name ?? '---' }}</td>
                        <td>{{ $story->summry }}</td>
                        <td>
                            <form action="{{ route('stories.pdf') }}" method="POST">
                                @csrf
                                <input type="hidden" name="storyTypeId" value="{{ $story->storyTypeId }}">
                                <input type="hidden" name="taskelId" value="{{ $story->taskelId }}">
                                <input type="hidden" name="summry" value="{{ $story->summry }}">
                                <input type="hidden" name="job_title" value="{{ $story->job_title }}">
                                <button type="submit" class="btn btn-outline-primary btn-sm">تحميل PDF</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#storyForm').submit(function (e) {
                e.preventDefault(); // منع الإرسال العادي

                let formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: "{{ route('stories.store') }}",
                    data: formData,
                    success: function (response) {
                        // إغلاق المودال
                        $('#exampleModal').modal('hide');

                        // إعادة تحميل الصفحة لإظهار القصة الجديدة في الجدول
                        location.reload();
                    },
                    error: function (xhr) {
                        let errors = xhr.responseJSON.errors;
                        let message = "حدث خطأ أثناء الحفظ:";
                        for (const key in errors) {
                            message += "\n - " + errors[key];
                        }
                        alert(message);
                    }
                });
            });
        });
    </script>

@endsection