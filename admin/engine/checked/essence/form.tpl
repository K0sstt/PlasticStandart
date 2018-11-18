<div class="container-fluid">
    <div class="row">
        <div class="col col-lg-6 col-md-8 col-lg-offset-3 col-md-offset-2">
            <form action="script.php?n=update_essence&class=%class%&id=%id%" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Название" value="%title%" />
                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control" placeholder="Описание">%description%</textarea>
                </div>
                <div class="form-group">
                    <label>
                        <img src="script.php?n=essence_image&class=%class%&id=%id%" class="img-responsive wrapped">
                        <input type="file" name="image">
                    </label>
                </div>
                <a class="btn btn-default" href="script.php?n=delete_essence&class=%class%&id=%id%">Удалить</a>
                <input type="submit" class="btn btn-primary" name="submit" value="Сохранить" />
            </form>
        </div>
    </div>
</div>