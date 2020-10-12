<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form </title>
</head>

<body>
    <form action="" method="post">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Nome</label>
            <div class="col-sm-8">
                <input type="text" name="name" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="email" name="email" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Formazione</label>
            <div class="col-sm-8">
                <select id="education" name="education" class="form-control">
                    <option selected="" disabled>...</option>
                    <option value="Graduation">Laurea</option>
                    <option value="Post Graduation">Specializzazione</option>
                </select>
            </div>
        </div>

        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-4 pt-0">Sesso</legend>
                <div class="col-sm-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="male" name="gender" value="Male" class="custom-control-input">
                        <label class="custom-control-label" for="male">Machile</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="female" name="gender" value="Female" class="custom-control-input">
                        <label class="custom-control-label" for="female">Femminile</label>
                    </div>
                </div>
            </div>
        </fieldset>

        <div class="form-group row">
            <div class="col-sm-4">Hobbies</div>
            <div class="col-sm-8">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" name="hoby[]" value="Drawing" class="custom-control-input" id="drawing">
                    <label class="custom-control-label" for="drawing">Disegno</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" name="hoby[]" value="Singing" class="custom-control-input" id="singing">
                    <label class="custom-control-label" for="singing">Cantare</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" name="hoby[]" value="Dancing" class="custom-control-input" id="dancing">
                    <label class="custom-control-label" for="dancing">Ballare</label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Commenti</label>
            <div class="col-sm-8">
                <textarea class="form-control" name="comment" id="comment" rows="4"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-12 mt-3">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Inoltra</button>
            </div>
        </div>
    </form>
</body>

</html>