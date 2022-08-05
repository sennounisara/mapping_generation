<?php



/**
 * This class defines the structure of the 'GeolocalisationN0' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonGeolocalisationN0TableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonGeolocalisationN0TableMap';

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
        $this->setName('GeolocalisationN0');
        $this->setPhpName('CommonGeolocalisationN0');
        $this->setClassname('CommonGeolocalisationN0');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('denomination', 'Denomination', 'VARCHAR', true, 40, '');
        $this->addColumn('denomination_fr', 'DenominationFr', 'VARCHAR', true, 40, null);
        $this->addColumn('denomination_en', 'DenominationEn', 'VARCHAR', true, 40, null);
        $this->addColumn('denomination_es', 'DenominationEs', 'VARCHAR', true, 40, null);
        $this->addColumn('type', 'Type', 'INTEGER', true, null, null);
        $this->addColumn('libelle_selectionner', 'LibelleSelectionner', 'VARCHAR', true, 40, '');
        $this->addColumn('libelle_selectionner_fr', 'LibelleSelectionnerFr', 'VARCHAR', true, 40, null);
        $this->addColumn('libelle_selectionner_en', 'LibelleSelectionnerEn', 'VARCHAR', true, 40, null);
        $this->addColumn('libelle_selectionner_es', 'LibelleSelectionnerEs', 'VARCHAR', true, 40, null);
        $this->addColumn('libelle_tous', 'LibelleTous', 'VARCHAR', true, 40, '');
        $this->addColumn('libelle_tous_fr', 'LibelleTousFr', 'VARCHAR', true, 40, null);
        $this->addColumn('libelle_tous_en', 'LibelleTousEn', 'VARCHAR', true, 40, null);
        $this->addColumn('libelle_tous_es', 'LibelleTousEs', 'VARCHAR', true, 40, null);
        $this->addColumn('libelle_Aucun', 'LibelleAucun', 'VARCHAR', true, 50, '');
        $this->addColumn('libelle_Aucun_fr', 'LibelleAucunFr', 'VARCHAR', true, 50, null);
        $this->addColumn('libelle_Aucun_en', 'LibelleAucunEn', 'VARCHAR', true, 50, null);
        $this->addColumn('libelle_Aucun_es', 'LibelleAucunEs', 'VARCHAR', true, 50, null);
        $this->addColumn('denomination_ar', 'DenominationAr', 'VARCHAR', true, 40, null);
        $this->addColumn('libelle_selectionner_ar', 'LibelleSelectionnerAr', 'VARCHAR', true, 40, null);
        $this->addColumn('libelle_tous_ar', 'LibelleTousAr', 'VARCHAR', true, 40, null);
        $this->addColumn('libelle_Aucun_ar', 'LibelleAucunAr', 'VARCHAR', true, 40, null);
        $this->addColumn('denomination_su', 'DenominationSu', 'VARCHAR', true, 40, null);
        $this->addColumn('libelle_selectionner_su', 'LibelleSelectionnerSu', 'VARCHAR', true, 40, null);
        $this->addColumn('libelle_tous_su', 'LibelleTousSu', 'VARCHAR', true, 40, null);
        $this->addColumn('libelle_Aucun_su', 'LibelleAucunSu', 'VARCHAR', true, 40, null);
        $this->addColumn('denomination_du', 'DenominationDu', 'VARCHAR', true, 40, null);
        $this->addColumn('libelle_selectionner_du', 'LibelleSelectionnerDu', 'VARCHAR', true, 40, null);
        $this->addColumn('libelle_tous_du', 'LibelleTousDu', 'VARCHAR', true, 40, null);
        $this->addColumn('libelle_Aucun_du', 'LibelleAucunDu', 'VARCHAR', true, 40, null);
        $this->addColumn('denomination_cz', 'DenominationCz', 'VARCHAR', true, 40, null);
        $this->addColumn('libelle_selectionner_cz', 'LibelleSelectionnerCz', 'VARCHAR', true, 40, null);
        $this->addColumn('libelle_tous_cz', 'LibelleTousCz', 'VARCHAR', true, 40, null);
        $this->addColumn('libelle_Aucun_cz', 'LibelleAucunCz', 'VARCHAR', true, 40, null);
        $this->addColumn('denomination_it', 'DenominationIt', 'VARCHAR', true, 40, '');
        $this->addColumn('libelle_selectionner_it', 'LibelleSelectionnerIt', 'VARCHAR', true, 40, '');
        $this->addColumn('libelle_tous_it', 'LibelleTousIt', 'VARCHAR', true, 40, '');
        $this->addColumn('libelle_Aucun_it', 'LibelleAucunIt', 'VARCHAR', true, 40, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonGeolocalisationN0TableMap
