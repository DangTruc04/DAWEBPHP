<div class="sidebar_widget shop_c">
                                                <div class="categorie__titile">
                                                    <h4>Categories</h4>
                                                </div>
                                                <div class="layere_categorie">
                                                    <ul>
                                                    <?php foreach ($dssp2 as $parent)
                                                    {
                                                    echo'
                    
                                                        <li>
                                                            <input id="'.$parent['ID'].'" type="checkbox" name="category_id" value="'.$parent['ID'].'">
                                                            <label for="'.$parent['ID'].'">'.$parent['name'].'</label>
                                                        </li>
                                                       ';
                                                    }
                                                    ?>
                                                    </ul>
                                                </div>
                                            </div>


                                            <!-- <div class="sidebar_widget shop_c">
                                                <div class="categorie__titile">
                                                    <h4>Categories</h4>
                                                </div>
                                                <div class="layere_categorie">
                                                <ul>
                                                <select class="custom-select" name ="category_id"style="margin-right: 2rem">
                                                    <option value="">Type</option>
                                                    <?php foreach ($dssp2 as $parent)
                                                    {
                                                    echo'<option value="'.$parent['ID'].'">'.$parent['name'].'</option>';
                                                    }
                                                    ?>
                                                    
                                                </select> 
                                                </ul>
                                                </div>
                                            </div> -->
                                            