is.not.ie()&&($(".cepMask").mask("99999-999"),$(".cpfMask").mask("999.999.999-99"),$(".cnpjMask").mask("99.999.999/9999-99"),$(".dataMask").mask("99/99/9999"),$(".foneMask").focusout(function(){$(".foneMask").unmask(),10<$(".foneMask").val().replace(/\D/g,"").length?$(".foneMask").mask("(99) 99999-999?9"):$(".foneMask").mask("(99) 9999-9999?9")}).trigger("focusout"));var sectionFields={el:$(".fieldsetHero"),sobreVoce:$("#sobre-voce"),dadosVeiculo:$("#dados-veiculo"),infosVeiculo:$("#informacoes-veiculo"),infosComp:$("#informacoes-complementares")},fields={step1__nomeCompleto:$("#formJRF_nome"),step1__telefone:$("#formJRF_telefone"),step1__allFields:sectionFields.sobreVoce.find("input"),step2__0km:$(".li0km div")};fields.step1__allFields.on("keyup",function(){""===fields.step1__nomeCompleto.val()||""===fields.step1__telefone.val()?(sectionFields.dadosVeiculo.removeClass("is-active"),sectionFields.dadosVeiculo.hide("fast")):(setTimeout(function(){sectionFields.dadosVeiculo.addClass("is-active")},500),sectionFields.dadosVeiculo.show("fast"))}),fields.step2__0km.on("click",function(){var e=$("#optZeroKM").is(":checked");console.log(e),e?($(".js-vehiclePlate").addClass("u-dnone"),$(".js-vehicleLocation").removeClass("u-dnone")):($(".js-vehiclePlate").removeClass("u-dnone"),$(".js-vehicleLocation").addClass("u-dnone"))}),$(".js-goToStep").on("click",function(e){e.preventDefault();var s=$(this).attr("href");console.log(s),sectionFields.el.removeClass("is-active"),setTimeout(function(){sectionFields.el.hide("fast")},150),setTimeout(function(){$(s).show("fast")},300),setTimeout(function(){$(s).addClass("is-active")},500),$(".c-hamburguer").addClass("is-active")}),$(".js-openAside").on("click",function(e){e.preventDefault(),console.log("click"),$(".jrfHero").addClass("is-active")}),$(".c-hamburguer").on("click",function(){$(this).toggleClass("is-active"),$(".jrfHero").toggleClass("is-active")}),$(".closeAside").on("click",function(){$(".c-hamburguer").removeClass("is-active"),$(".jrfHero").removeClass("is-active")}),$(".c-toggleList.--withCheckbox .field").on("change keyup",function(){$(this).closest(".c-toggleList.--withCheckbox").each(function(e){$(this).find(".field").each(function(e){var s=$(this).attr("required"),o=$(this).val();console.log(o),"required"===s&&(""!==o||"undefined"!==o?$(this).closest(".c-toggleList.--withCheckbox").children("input").prop("checked",!0):$(this).closest(".c-toggleList.--withCheckbox").children("input").prop("checked",!1))})})});
//# sourceMappingURL=allPages-min.js.map
