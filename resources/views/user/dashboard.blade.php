<x-layout title="Dashboard">
    <div class="row">
        <div class="col">
            <div class="mb-0 card">
                <div class="card-body">
                    <div class="widget-first">

                        <div class="mb-2 d-flex align-items-center">
                            <div
                                class="p-2 border border-secondary border-opacity-10 bg-secondary-subtle rounded-pill me-2">
                                <div class="text-center bg-secondary rounded-circle widget-size text-white">
                                    <i data-feather="book"></i>
                                </div>
                            </div>
                            <p class="mb-0 text-dark fs-15">Kursus Saya</p>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-0 text-black fs-22 me-3">{{ number_format($myCourses) }}</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="mb-0 card">
                <div class="card-body">
                    <div class="widget-first">

                        <div class="mb-2 d-flex align-items-center">
                            <div
                                class="p-2 border border-secondary border-opacity-10 bg-secondary-subtle rounded-pill me-2">
                                <div class="text-center bg-secondary rounded-circle widget-size text-white">
                                    <i data-feather="layers"></i>
                                </div>
                            </div>
                            <p class="mb-0 text-dark fs-15">Total Kursus Tersedia</p>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-0 text-black fs-22 me-3">{{ number_format($totalCourses) }}</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
