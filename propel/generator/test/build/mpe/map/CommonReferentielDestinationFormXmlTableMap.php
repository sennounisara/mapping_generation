<?php



/**
 * This class defines the structure of the 'ReferentielDestinationFormXml' table.
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
class CommonReferentielDestinationFormXmlTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonReferentielDestinationFormXmlTableMap';

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
        $this->setName('ReferentielDestinationFormXml');
        $this->setPhpName('CommonReferentielDestinationFormXml');
        $this->setClassname('CommonReferentielDestinationFormXml');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('destinataire', 'Destinataire', 'VARCHAR', true, 100, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonAnnonceMoniteur', 'CommonAnnonceMoniteur', RelationMap::ONE_TO_MANY, array('id' => 'id_destination_form_xml', ), null, null, 'CommonAnnonceMoniteurs');
    } // buildRelations()

} // CommonReferentielDestinationFormXmlTableMap
