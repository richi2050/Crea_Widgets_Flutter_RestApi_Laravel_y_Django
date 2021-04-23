import 'package:flutter/material.dart';
import 'package:rest_flutter/models/chip_model.dart';
import 'package:rest_flutter/utils/custom_drawer.dart';
import 'package:rest_flutter/widgets/chip_widget.dart';

class ChipsPage extends StatelessWidget {
  static const String ROUTE = '/chips';
  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
          title: Text('Chip Pages'),
        ),
        drawer: CustomDrawer.getDrawer(context),
        body: Column(
          children: buildWidgets(getData()),
        ));
  }

  /*
   * Obtiene la data y compone el modelo
   */
  List<ChipModel> getData() {
    List<ChipModel> chipModels = List();

    for (int i = 0; i < 10; i++)
      chipModels.add(ChipModel.constructor(
          "FFFFFFFF", "FFFF0000", "Ricardo Lugo $i", "access_alarm"));

    return chipModels;
  }

  List<Widget> buildWidgets(List<ChipModel> chipModels) {
    List<Widget> chipWidgets = List();
    chipModels.forEach((chipModel) {
      chipWidgets.add(ChipWidget(chipModel));
    });
    return chipWidgets;
  }
}
