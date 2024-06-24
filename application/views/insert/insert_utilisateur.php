<div class="row justify-content-center align-items-center mt-5 px-lg-2 px-md-2 ">
    <div class=" row p-3 mt-5 mt-md-0 mt-lg-6 insert bg-light">
        <div class="col-12 col-md-12 col-lg-5 ps-0 mb-3 mb-md-0 mb-lg-0 pe-0 pe-md-2 pe-lg-2 d-none d-md-none d-lg-block">
            <div class="row justify-content-center my-2 my-md-3 my-lg-3">
                <img class="col-12 col-md-6 col-lg-12 img-fluid photo" src="<?php echo base_url("assets/image/_01e7037b-7c81-4576-b476-94d353d94b3a.jpg") ?>" alt="">
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-7 bg-light insert pt-sm-3 my-lg-5 ">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center fs-1 fw-bold color-black mb-3 mt-1 mt-md-2 mt-lg-4 ">
                    <div class="row justify-content-center d-block d-md-block d-lg-none"><img src="<?php echo base_url("assets/image/_01e7037b-7c81-4576-b476-94d353d94b3a.jpg") ?>" class="profil" alt=""></div>
                    <div class="row justify-content-center color-red">
                        <div class="col-8"><?php echo $name; ?></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-11 col-md-6 col-md-6">
                    <form method="POST" action="<?php echo site_url($action); ?>">
                        <?php if (isset($user)) { ?>
                            <input type="number" name="id" value="<?php echo $user['id_utilisateur'] ?>" hidden>
                        <?php } ?>
                        <div class="form-floating mb-3">
                            <input type="text" name="identifiant" class="form-control rounded-33 ps-3" id="floatingInput" aria-describedby="emailHelp" placeholder="Email" <?php if (isset($user)) { ?>value=<?php echo $user['identifiant'] ?><?php } ?> required>
                            <label for="floatingInput" class="form-label ps-4 ">Identifiant (mail ou numero)</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="mdp" class="form-control rounded-33 ps-3" id="exampleInputPassword1" placeholder="Password" <?php if (isset($user)) { ?>value=<?php echo $user['mdp'] ?><?php } ?> required>
                            <label for="exampleInputPassword1" class="form-label ps-4">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select name="status" class="form-control rounded-33 ps-3" id="floatingSelect" required>
                                <?php for ($i = 0; $i < count($status); $i++) {
                                    if (isset($user) && $status[$i]["id_status"] == $user['status']) { ?>
                                        <option selected value="<?php echo $status[$i]["id_status"] ?>"><?php echo $status[$i]['status_nom'] ?></option>
                                    <?php } else { ?>
                                        <option value="<?php echo $status[$i]["id_status"] ?>"><?php echo $status[$i]['status_nom'] ?></option>
                                    <?php }
                                    ?>

                                <?php } ?>
                            </select>
                            <label for="floatingSelect" class="form-label ps-4">Status</label>
                        </div>
                        <div class="row justify-content-center mb-3 mb-md-5 mb-lg-0">
                            <div class="col-md-9">
                                <button type="submit" class="form-control btn btn-dark color-white rounded-33 bouton">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>