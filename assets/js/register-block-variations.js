const customIcon = wp.element.createElement(
	"svg",
	{
		xmlns: "http://www.w3.org/2000/svg",
		version: "1.1",
		viewBox: "0 0 500 500",
	},
	wp.element.createElement("path", {
		d: "M446.5,86.2h-42.9v-29.7c0-9.1-7.4-16.5-16.5-16.5h-93.7c-9.1,0-16.5,7.4-16.5,16.5v29.7h-53.8v-29.7c0-9.1-7.4-16.5-16.5-16.5h-93.7c-9.1,0-16.5,7.4-16.5,16.5v29.7h-42.9C23.9,86.2,0,110.2,0,139.7v266.8c0,29.5,23.9,53.5,53.5,53.5h393c29.5,0,53.5-23.9,53.5-53.5V139.7c0-29.5-23.9-53.5-53.5-53.5Z",
	})
);

wp.domReady(() => {
	wp.blocks.registerBlockVariation("core/group", {
		name: "section",
		title: "Section",
		category: "custom-block",
		icon: customIcon,
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
		icon: customIcon,
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
