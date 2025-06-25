<?php
$txtpass=$_POST["txtpass"];
$txtrpass=$_POST["txtrpass"];

?>

<label for="floatingInput">Repeat Password</label>
                                       
                                <?php
                               
                                if($txtpass!=$txtrpass)
                            {
                                ?>
                                 <div class="form-floating mb-3">
                                        <label for="floatingInput">Password must match to the first</label>
                                            <input type="text" name="txtrpassword" class="form-control"
                                                id="txtrpassword" placeholder="Password"
                                                aria-describedby="floatingInputHelp" />
                                        </div>
                                <?php
                            }
                            else
                            {
                                ?>
                                <div class="form-floating mb-3">

                                    <input type="text" name="txtrpassword" class="form-control"
                                        id="txtrpassword" placeholder="Password"
                                        aria-describedby="floatingInputHelp" />
                                    </div>

                                <?php
                            }
                            ?>
                             </select>
                           