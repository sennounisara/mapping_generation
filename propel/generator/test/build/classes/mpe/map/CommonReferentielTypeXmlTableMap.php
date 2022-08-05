<?php



/**
 * This class defines the structure of the 'ReferentielTypeXml' table.
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
class CommonReferentielTypeXmlTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonReferentielTypeXmlTableMap';

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
        $this->setName('ReferentielTypeXml');
        $this->setPhpName('CommonReferentielTypeXml');
        $this->setClassname('CommonReferentielTypeXml');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_destinataire', 'IdDestinataire', 'VARCHAR', true, 50, '');
        $this->addColumn('libelle_type', 'LibelleType', 'VARCHAR', true, 100, '');
        $this->addColumn('libelle_type_fr', 'LibelleTypeFr', 'VARCHAR', true, 100, null);
        $this->addColumn('libelle_type_en', 'LibelleTypeEn', 'VARCHAR', true, 100, null);
        $this->addColumn('libelle_type_es', 'LibelleTypeEs', 'VARCHAR', true, 100, null);
        $this->addColumn('libelle_type_su', 'LibelleTypeSu', 'VARCHAR', true, 100, null);
        $this->addColumn('libelle_type_du', 'LibelleTypeDu', 'VARCHAR', true, 100, null);
        $this->addColumn('libelle_type_cz', 'LibelleTypeCz', 'VARCHAR', true, 100, null);
        $this->addColumn('libelle_type_ar', 'LibelleTypeAr', 'VARCHAR', true, 100, null);
        $this->addColumn('libelle_type_it', 'LibelleTypeIt', 'VARCHAR', true, 100, null);
        $this->addColumn('id_avis_marche', 'IdAvisMarche', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonReferentielTypeXmlTableMap
