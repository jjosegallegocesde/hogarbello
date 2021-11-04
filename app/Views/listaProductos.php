<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('public/styles/estilos.css') ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <main>

        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-5 g-4">

                <?php foreach($productos as $producto): ?>
                    <div class="col">
                        <div class="card h-100 p-3">
                            <img src="<?= $producto["foto"] ?>" class="card-img-top" alt="foto">
                            <div class="card-body">
                                <h5 class="card-title"><?= $producto["producto"] ?></h5>
                                <p class="card-text"></p>
                                <a data-bs-toggle="modal" data-bs-target="#confirmacion<?= $producto["id"]?>" href="#" class="btn btn-primary"><i class="far fa-trash-alt"></i></a>
                                <a data-bs-toggle="modal" data-bs-target="#editar<?= $producto["id"]?>" href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            </div>
                        </div>
                        <section>
                            <div class="modal fade" id="confirmacion<?= $producto["id"]?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header fondoPrincipal text-white">
                                            <h5 class="modal-title">Casa Hogar</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                           <p>¿esta seguro de eliminar este producto?</p>
                                           <p><?= $producto["id"]?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <a href="<?= site_url('/producto/eliminar/'.$producto["id"]) ?>" class="btn btn-danger">Aceptar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="modal fade" id="editar<?= $producto["id"]?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header fondoPrincipal text-white">
                                            <h5 class="modal-title">Casa Hogar</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                           <div class="row">
                                               <div class="col-3">
                                                <img src="<?= $producto["foto"] ?>" alt="foto" class="img-fluid w-100">
                                               </div>
                                               <div class="col-9">
                                                    <form action="<?= site_url('/producto/editar/'.$producto["id"]) ?>" method="POST">
                                                        <div class="mb-3">
                                                            <label class="form-label">precio:</label>
                                                            <input type="text" class="form-control" name="precio" value="<?= $producto["precio"] ?>">
                                                        </div>
                                                        <button class="btn boton" type="submit">Button</button>
                                                    </form>
                                               </div>
                                           </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                <?php endforeach ?>

            </div>
        </div>

    </main>
    

    <script src="https://kit.fontawesome.com/7b642ec699.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>