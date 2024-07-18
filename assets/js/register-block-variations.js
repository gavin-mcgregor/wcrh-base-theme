wp.domReady(() => {
	wp.blocks.registerBlockVariation("core/group", {
		name: "section",
		title: "Section",
		category: "custom-block",
		attributes: {
			tagName: "section",
			layout: {
				type: "default",
			},
			metadata: {
				name: "Section",
			},
		},
	});

	wp.blocks.registerBlockVariation("core/group", {
		name: "inner",
		title: "Inner",
		category: "custom-block",
		attributes: {
			layout: {
				type: "default",
			},
			metadata: {
				name: "Inner",
			},
		},
	});
});
