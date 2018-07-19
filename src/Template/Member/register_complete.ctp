<div class="gtco-section">
	<div class="gtco-container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 gtco-heading">
				<h2 class="cursive-font primary-color text-center">お申込完了</h2>
				申し込みありがとうございます。
				<?php echo $this->Form->create(null,[
					'type' => 'post',
					'url' => [
						'controller' => 'member',
						'action' => 'register_complete',
					],
					'id' => 'register',
					'inputDefaults' => [
						'label' => false,
						'div' => false,
					],
					'novalidate' => 'false',
				]); ?>

					<?php echo $this->Form->button('戻る', [
						'type' => 'button',
						'onclick' => 'history.back()',
					]); ?>
					<?php echo $this->Form->submit('上記内容で申し込む', [
						'class' => 'button',
					]); ?>

				<?php echo $this->Form->end(); ?>
			</div>
		</div>

	</div>
</div>