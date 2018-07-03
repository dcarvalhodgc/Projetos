
<div class="form-group">
                <label for="nome" class="col-sm-3 control-label">Nome</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Nome" name="nome" data-validation="required"
                           value="<?=$pessoa->getNome()?>">
                </div>
            </div>
            <div class="form-group">
                <label for="dtNasc" class="col-sm-3 control-label">Data de Nascimento</label>
                <div class="col-sm-4">
                    <input class="datepicker form-control"  type="date" name="dtNasc" data-validation="required"
                           value="<?=$pessoa->getDtNasc()?>">
                </div>
            </div>
            <div class="form-group">
                <label for="nome" class="col-sm-3 control-label">Função</label>
                <div class="col-sm-4">
                    <select class="form-control" name="job_id">
                        <?php foreach ($jobs as $job) :
                            $proficao = $pessoa->getJob()->getId() == $job->getId();
                            $selecao = $proficao ? "selected='selected'":"";
                            ?>
                            <option  value="<?=$job->getId()?>" <?=$selecao?> >
                                <?=$job->getNome()?><br/>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="nome" class="col-sm-3 control-label">Salário</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" placeholder="Salario" name=salario data-validation="required"
                           value="<?=$pessoa->getSalario()?>">
                </div>
            </div>
            <div class="form-group">
                <label for="nome" class="col-sm-3 control-label">Endereço</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Endereço" name="endereco" data-validation="required"
                           value="<?=$pessoa->getEndereco()?>">
                </div>
            </div>
            <div class="form-group">
                <label for="nome" class="col-sm-3 control-label">Tipo de Contrato</label>
                <div class="col-sm-3">
                    <select class="form-control" name="tipoContrato">
                        <?php
                        $tipos = array("Estagio","CLT");
                        foreach ($tipos as $tipo) :
                            $proficaoTipo = $pessoa->getTipoContrato() == $tipo;
                            $selecao = $proficaoTipo ? "selected='selected'":"";
                            ?>
                            <option  value="<?=$tipo?>" <?=$selecao?> >
                                <?=$tipo?><br/>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="nome" class="col-sm-3 control-label">Matricula</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" placeholder="Matricula" name=matricula data-validation="required"
                           value="<?=$pessoa->getMatricula()?>">
                </div>
            </div>