<div>
    <div class="container mt-5">
        <div class="container d-flex justify-content-between align-items-center">
        <h2>Employees</h2>
        <div class="d-flex justify-content-between">
            <input wire:model="search" type="text" placeholder="Search name" class="form-control me-2">
            <select wire:model.lazy="sortByGender" class="form-select w-50 me-2" aria-label="Default select example">
                <option value="all">All</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <select wire:model.lazy="sortByDept" class="form-select w-50" aria-label="Default select example">
                <option value="all">All</option>
                <option value="Board of Directors">Board of Directors</option>
                <option value="Finance">Finance</option>
                <option value="General Management">General Management</option>
                <option value="Human Resources">Human Resources</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Legal">Legal</option>
                <option value="Project Management Office">Project Management Office</option>
                <option value="Quality Assurance">Quality Assurance</option>
            </select>
        </div>
        </div>

        <div class="container">
            <div class="row bg-secondary text-white rounded border-top border-bottom mb-2 p-2">
                <div class="col">
                    <p class="mb-0 text-center fw-semibold">Empname</p>
                </div>
                <div class="col">
                    <p class="mb-0 text-center fw-semibold">Gender</p>
                </div>
                <div class="col">
                    <p class="mb-0 text-center fw-semibold">Salary</p>
                </div>
                <div class="col">
                    <p class="mb-0 text-center fw-semibold">Department</p>
                </div>
                <div class="col">
                    <p class="mb-0 text-center fw-semibold">Hire Date</p>
                </div>
                <div class="col">
                    <p class="mb-0 text-center fw-semibold">Action</p>
                </div>
            </div>
            @if($employees->count() > 0)
                @foreach ($employees as $emp)
            <div class="row border shadow-sm rounded mb-2 p-3">
                <div class="col">
                    <p class="mb-0 text-center fw-normal">{{ $emp->empname }}</p>
                </div>
                <div class="col">
                    <p class="mb-0 text-center fw-normal">{{ $emp->gender }}</p>
                </div>
                <div class="col">
                    <p class="mb-0 text-center fw-normal">{{ $emp->salary }}</p>
                </div>
                <div class="col">
                    <p class="mb-0 text-center fw-normal">{{ $emp->department }}</p>
                </div>
                <div class="col">
                    <p class="mb-0 text-center fw-normal">{{ $emp->hire_date }}</p>
                </div>
                <div class="col text-center">
                    <a href="" class="text-dark"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="" class="text-danger"><i class="fa-solid fa-trash"></i></a>
                </div>
            </div>
                @endforeach
            @else
            <div class="row text-center">
                <p class="mb-0 fw-semibold disabled">No employees found.</p>
            </div>
            @endif
            {{$employees->links()}}
        </div>
    </div>
</div>
