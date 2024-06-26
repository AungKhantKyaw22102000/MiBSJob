<!DOCTYPE html>
<html>
<head>
    <style>
        .idcard {
            position: relative;
            top: 0;
            left: 0;
            background: url('image/IDcard.png') no-repeat center center;
            background-size: cover;
            width: 100%;
            height: 100%;
            color: #F9A418;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .value {
            color: #000;
        }
        .photo {
            width: 120px;
            border-radius: 50%;
        }
    </style>
    <link href="{{ asset('admin/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container-fluid">
        <div class="idcard">
            <img src="{{ asset('storage/employeePhoto/' . $employee->image) }}" class="photo">
            <div>{{ $employee->name }}</div>
            <div>
                <div>
                    <span class="label">Employee ID: </span>
                    <span class="value">{{ $employee->employee_id }}</span>
                </div>
                <div>
                    <span class="label">Department: </span>
                    <span class="value">{{ $employee->department }}</span>
                </div>
                <div>
                    <span class="label">Address: </span>
                    <span class="value">{{ $employee->address }}</span>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
