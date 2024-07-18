wp.domReady(() => {
	wp.domReady(function () {
		// Remove embed blocks
		const allowedEmbedBlocks = ["embed", "youtube", "vimeo"];
		wp.blocks
			.getBlockVariations("core/embed")
			.forEach(function (blockVariation) {
				if (-1 === allowedEmbedBlocks.indexOf(blockVariation.name)) {
					wp.blocks.unregisterBlockVariation("core/embed", blockVariation.name);
				}
			});
		// Remove spacer block
		wp.blocks.unregisterBlockType("core/spacer");
	});
});
