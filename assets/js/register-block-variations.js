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
		innerBlocks: [
			[
				"core/group",
				{
					variation: "inner",
					metadata: { name: "Inner" },
					width: "page-width-normal",
					layout: { type: "default" },
				},
				[
					["wcrh/custom-spacer"],
					[
						"core/paragraph",
						{ content: "This is a paragraph inside the nested group." },
					],
					["wcrh/custom-spacer"],
				],
			],
		],
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
