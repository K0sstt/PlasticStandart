<div class="container-fluid">
    <div class="row">
        <div class="col col-lg-6 col-md-8 col-lg-offset-3 col-md-offset-2">
            <form action="script.php?n=add_essence&class=%class%" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Название" />
                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control" placeholder="Описание"></textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="image">
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Сохранить" />
            </form>
        </div>
    </div>
</div>