<div class="filter_form_0">
    <div class="filter_form_1">
        <p id="close_filter">close</p>
        <div class="filter_op">Выберите необходимые Вам поля</div>
        <form method="post" action="#">
            <div class="block_1_styled-select">
                <div class="b1">
                    <div class="styled-select_1">
                        <select id="selectBox" name="data['fd432sgd']" size="1">
                            <option disabled selected>Выберите производителя</option>
                            <?php foreach($this->sidebar as $item):?>
                                    <option value="<?php echo $item['prod_id']?>"><?php echo $item['name']?></option>
                            <?php endforeach; ?>
                        </select>
                     </div>
                 </div>
                <div class="b2">
                    <div class="styled-select_1">
                        <select id="urofiliya" name="data['fdsg42d']" size="1">
                            <option disabled selected>Выберите колекцию</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="block_2_styled-select">
                <div class="b1">
                    <div class="styled-select_2">
                        <select name="data['fdsg34d']" size="1">
                            <option>Выберите пол</option>
                            <option value="-">Все</option>
                            <option value="0">Мужские</option>
                            <option value="1">Женские</option>
                            <option value="2">Унисекс</option>
                        </select>
                    </div>
                </div>
                <div class="b2">
                    <div class="styled-select_2">
                        <select name="ata['fdsgd3']" size="1">
                            <option>Выберите тип</option>
                            <option value="-">Все</option>
                            <option value="3">Классические</option>
                            <option value="4">Спортивные</option>
                            <option value="5">Ювелирные</option>
                            <option value="6">С усложнениями</option>
                            <option value="7">Настольные</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="block_3_styled-select">
                <div class="b1">
                    <input type="numbrer" name="data[from]" placeholder="от"> - <input type="numbrer"  name="data[to]" placeholder="до">
                </div>
                <div class="b2">
                    <div class="styled-select">
                        <input type="checkbox" name="data['fdsgd']" value""/> <p>В наличии!</p>
                    </div>
                </div>
            </div>

            <div class="block_4_styled-select">
                <div class="block_4_styled-select_1">
                    <input id="submit_filter" type="submit" value="Фильтровать">
                 </div>
            </div>

        </form>
    </div>
</div>