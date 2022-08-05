<?php



/**
 * This class defines the structure of the 'champ_supplementaire' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class ChampSupplementaireTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.ChampSupplementaireTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('champ_supplementaire');
        $this->setPhpName('ChampSupplementaire');
        $this->setClassname('ChampSupplementaire');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_CHAMP_SUPPLEMENTAIRE', 'IdChampSupplementaire', 'INTEGER', true, null, null);
        $this->addColumn('ID_ORGANISME', 'IdOrganisme', 'INTEGER', false, null, null);
        $this->addColumn('ID_THEME', 'IdTheme', 'INTEGER', false, null, null);
        $this->addColumn('ID_ACTION', 'IdAction', 'INTEGER', false, null, null);
        $this->addColumn('LABEL_FR1', 'LabelFr1', 'VARCHAR', false, 255, null);
        $this->addColumn('LABEL_AR1', 'LabelAr1', 'VARCHAR', false, 255, null);
        $this->addColumn('LABEL_COURT1', 'LabelCourt1', 'VARCHAR', false, 255, null);
        $this->addColumn('TYPE1', 'Type1', 'INTEGER', false, null, null);
        $this->addColumn('OBLIGATOIRE1', 'Obligatoire1', 'CHAR', false, null, '0');
        $this->getColumn('OBLIGATOIRE1', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ACTIF1', 'Actif1', 'CHAR', false, null, '0');
        $this->getColumn('ACTIF1', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBLE1', 'Visible1', 'CHAR', true, null, '0');
        $this->getColumn('VISIBLE1', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('EMPLACEMENT1', 'Emplacement1', 'VARCHAR', false, 255, null);
        $this->addColumn('LABEL_FR2', 'LabelFr2', 'VARCHAR', false, 255, null);
        $this->addColumn('LABEL_AR2', 'LabelAr2', 'VARCHAR', false, 255, null);
        $this->addColumn('LABEL_COURT2', 'LabelCourt2', 'VARCHAR', false, 255, null);
        $this->addColumn('TYPE2', 'Type2', 'VARCHAR', false, 255, null);
        $this->addColumn('OBLIGATOIRE2', 'Obligatoire2', 'CHAR', false, null, '0');
        $this->getColumn('OBLIGATOIRE2', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ACTIF2', 'Actif2', 'CHAR', false, null, '0');
        $this->getColumn('ACTIF2', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBLE2', 'Visible2', 'CHAR', true, null, '0');
        $this->getColumn('VISIBLE2', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('EMPLACEMENT2', 'Emplacement2', 'VARCHAR', false, 255, null);
        $this->addColumn('LABEL_FR3', 'LabelFr3', 'VARCHAR', false, 255, null);
        $this->addColumn('LABEL_AR3', 'LabelAr3', 'VARCHAR', false, 255, null);
        $this->addColumn('LABEL_COURT3', 'LabelCourt3', 'VARCHAR', false, 255, null);
        $this->addColumn('TYPE3', 'Type3', 'VARCHAR', false, 255, null);
        $this->addColumn('OBLIGATOIRE3', 'Obligatoire3', 'CHAR', false, null, '0');
        $this->getColumn('OBLIGATOIRE3', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ACTIF3', 'Actif3', 'CHAR', false, null, '0');
        $this->getColumn('ACTIF3', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBLE3', 'Visible3', 'CHAR', true, null, '0');
        $this->getColumn('VISIBLE3', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('EMPLACEMENT3', 'Emplacement3', 'VARCHAR', false, 255, null);
        $this->addColumn('LABEL_FR4', 'LabelFr4', 'VARCHAR', false, 255, null);
        $this->addColumn('LABEL_AR4', 'LabelAr4', 'VARCHAR', false, 255, null);
        $this->addColumn('LABEL_COURT4', 'LabelCourt4', 'VARCHAR', false, 255, null);
        $this->addColumn('TYPE4', 'Type4', 'VARCHAR', false, 255, null);
        $this->addColumn('OBLIGATOIRE4', 'Obligatoire4', 'CHAR', false, null, '0');
        $this->getColumn('OBLIGATOIRE4', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ACTIF4', 'Actif4', 'CHAR', false, null, '0');
        $this->getColumn('ACTIF4', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBLE4', 'Visible4', 'CHAR', true, null, '0');
        $this->getColumn('VISIBLE4', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('EMPLACEMENT4', 'Emplacement4', 'VARCHAR', false, 255, null);
        $this->addColumn('LABEL_FR5', 'LabelFr5', 'VARCHAR', false, 255, null);
        $this->addColumn('LABEL_AR5', 'LabelAr5', 'VARCHAR', false, 255, null);
        $this->addColumn('LABEL_COURT5', 'LabelCourt5', 'VARCHAR', false, 255, null);
        $this->addColumn('TYPE5', 'Type5', 'VARCHAR', false, 255, null);
        $this->addColumn('OBLIGATOIRE5', 'Obligatoire5', 'CHAR', false, null, '0');
        $this->getColumn('OBLIGATOIRE5', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ACTIF5', 'Actif5', 'CHAR', false, null, '0');
        $this->getColumn('ACTIF5', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBLE5', 'Visible5', 'CHAR', true, null, '0');
        $this->getColumn('VISIBLE5', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('EMPLACEMENT5', 'Emplacement5', 'VARCHAR', false, 255, null);
        $this->addColumn('VALEUR_LISTE_FR_1', 'ValeurListeFr1', 'LONGVARCHAR', false, null, null);
        $this->addColumn('VALEUR_LISTE_AR_1', 'ValeurListeAr1', 'LONGVARCHAR', false, null, null);
        $this->addColumn('VALEUR_LISTE_FR_2', 'ValeurListeFr2', 'LONGVARCHAR', false, null, null);
        $this->addColumn('VALEUR_LISTE_AR_2', 'ValeurListeAr2', 'LONGVARCHAR', false, null, null);
        $this->addColumn('VALEUR_LISTE_FR_3', 'ValeurListeFr3', 'LONGVARCHAR', false, null, null);
        $this->addColumn('VALEUR_LISTE_AR_3', 'ValeurListeAr3', 'LONGVARCHAR', false, null, null);
        $this->addColumn('VALEUR_LISTE_FR_4', 'ValeurListeFr4', 'LONGVARCHAR', false, null, null);
        $this->addColumn('VALEUR_LISTE_AR_4', 'ValeurListeAr4', 'LONGVARCHAR', false, null, null);
        $this->addColumn('VALEUR_LISTE_FR_5', 'ValeurListeFr5', 'LONGVARCHAR', false, null, null);
        $this->addColumn('VALEUR_LISTE_AR_5', 'ValeurListeAr5', 'LONGVARCHAR', false, null, null);
        $this->addColumn('POSITION1', 'Position1', 'VARCHAR', false, 100, null);
        $this->addColumn('POSITION2', 'Position2', 'VARCHAR', false, 100, null);
        $this->addColumn('POSITION3', 'Position3', 'VARCHAR', false, 100, null);
        $this->addColumn('POSITION4', 'Position4', 'VARCHAR', false, 100, null);
        $this->addColumn('POSITION5', 'Position5', 'VARCHAR', false, 100, null);
        $this->addColumn('VISIBLE_BOV1', 'VisibleBov1', 'CHAR', true, null, '0');
        $this->getColumn('VISIBLE_BOV1', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBLE_BOV2', 'VisibleBov2', 'CHAR', true, null, '0');
        $this->getColumn('VISIBLE_BOV2', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBLE_BOV3', 'VisibleBov3', 'CHAR', true, null, '0');
        $this->getColumn('VISIBLE_BOV3', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBLE_BOV4', 'VisibleBov4', 'CHAR', true, null, '0');
        $this->getColumn('VISIBLE_BOV4', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBLE_BOV5', 'VisibleBov5', 'CHAR', true, null, '0');
        $this->getColumn('VISIBLE_BOV5', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBLE_TABLEAU1', 'VisibleTableau1', 'CHAR', true, null, '0');
        $this->getColumn('VISIBLE_TABLEAU1', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBLE_TABLEAU2', 'VisibleTableau2', 'CHAR', true, null, '0');
        $this->getColumn('VISIBLE_TABLEAU2', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBLE_TABLEAU3', 'VisibleTableau3', 'CHAR', true, null, '0');
        $this->getColumn('VISIBLE_TABLEAU3', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBLE_TABLEAU4', 'VisibleTableau4', 'CHAR', true, null, '0');
        $this->getColumn('VISIBLE_TABLEAU4', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBLE_TABLEAU5', 'VisibleTableau5', 'CHAR', true, null, '0');
        $this->getColumn('VISIBLE_TABLEAU5', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ChampSupplementaireTableMap
