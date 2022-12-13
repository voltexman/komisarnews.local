
<?= $form->field($model, $prefix . '_title')->textInput() ?>

<?= $form->field($model, 'keywords')->textInput() ?>

<?= $form->field($model, 'description')->textarea(['rows' => 3]) ?>

<?= $form->field($model, 'text')->textarea(['rows' => 10]) ?>