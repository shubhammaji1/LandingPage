<div class="btn-group mb-4 w-100" role="group" aria-label="User Type">
    <button type="button" class="btn btn-outline-primary {{ $activeType === 'Student' ? 'active' : '' }}" data-type="Student">Student</button>
    <button type="button" class="btn btn-outline-primary {{ $activeType === 'Employee' ? 'active' : '' }}" data-type="Employee">Employee</button>
    <button type="button" class="btn btn-outline-primary {{ $activeType === 'Customer' ? 'active' : '' }}" data-type="Customer">Customer</button>
</div>
