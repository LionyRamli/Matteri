<div class="row justify-content-center bg-image mx-0 mb-5">
            <div class="col-lg-6 py-5">
                <div class="bg-white p-5 my-5">
                    <h1 class="text-center mb-4">Add a Course</h1>
                    <form action="{{route('kompetensi.store')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('post')
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="kompetensi" required class="form-control bg-light border-0" placeholder="Kompetensi" style="padding: 30px 20px;">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <p>Tabel 1</p>
                            </div>
                            <div class="col-sm-4" >
                                <button class="btn btn-primary btn-block" type="submit" style="height:45px;">Simpan Kompeten</button>
                            </div>
                        </div>
                    </form>
                    <form action="{{route('materi.store')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('post')
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="materi" required class="form-control bg-light border-0" placeholder="Materi" style="padding: 30px 20px;">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <p>Tabel 2</p>
                            </div>
                            <div class="col-sm-4" >
                                <button class="btn btn-primary btn-block" type="submit" style="height:45px;">Simpan Materi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>