<h2>%metaClass%</h2>
<div class="container-fluid">
    <div class="row">
        <div class="col col-lg-6 col-md-8 col-lg-offset-3 col-md-offset-2">
            <form action="script.php?n=set_meta&class=%class%" method="post">
                <div class="form-group">
                    <textarea name="desc" class="form-control" placeholder="Описание">%desc%</textarea>
                </div>
                <div class="form-group">
                    <textarea name="keys" class="form-control" placeholder="Ключевые слова">%keys%</textarea>
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Сохранить" />
            </form>
        </div>
    </div>
</div>