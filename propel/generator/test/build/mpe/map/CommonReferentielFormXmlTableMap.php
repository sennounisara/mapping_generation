<?php



/**
 * This class defines the structure of the 'ReferentielFormXml' table.
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
class CommonReferentielFormXmlTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonReferentielFormXmlTableMap';

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
        $this->setName('ReferentielFormXml');
        $this->setPhpName('CommonReferentielFormXml');
        $this->setClassname('CommonReferentielFormXml');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addForeignKey('id_type_xml', 'IdTypeXml', 'INTEGER', 'ReferentielTypeXml', 'id', true, null, 0);
        $this->addColumn('consultation_ref', 'ConsultationRef', 'VARCHAR', true, 100, '');
        $this->addColumn('xml', 'Xml', 'LONGVARCHAR', true, null, null);
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', false, 20, null);
        $this->addColumn('statut', 'Statut', 'CHAR', false, null, null);
        $this->addColumn('id_compte_boamp', 'IdCompteBoamp', 'INTEGER', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonReferentielTypeXml', 'CommonReferentielTypeXml', RelationMap::MANY_TO_ONE, array('id_type_xml' => 'id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonAnnonceMoniteur', 'CommonAnnonceMoniteur', RelationMap::ONE_TO_MANY, array('id' => 'id_form_xml', ), null, null, 'CommonAnnonceMoniteurs');
    } // buildRelations()

} // CommonReferentielFormXmlTableMap
