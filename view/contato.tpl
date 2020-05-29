<!DOCTYPE html>
<html lang="pt">

    <head>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
    </head>

    <body>

        <div class="container-fluid">
            <div class="row">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td colspan="1">
                                <form class="well form-horizontal">
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Full Name</label>
                                            <div class="col-md-8 inputGroupContainer">
                                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName" placeholder="Full Name" class="form-control" required="true" value="" type="text"></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Email</label>
                                            <div class="col-md-8 inputGroupContainer">
                                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" required="true" value="" type="text"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Phone Number</label>
                                            <div class="col-md-8 inputGroupContainer">
                                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="" type="text"></div>

                                            </div>
                                            <br />

                                        </div>

                                    </fieldset>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                <button class="col-md-3 control-label " type="submit">Enviar</button>
                <button class="col-md-3 control-label" type="submit">Limpar</button>
            </div>
        </div>

    </body>

</html>