<?php



/**
 * This class defines the structure of the 'AVIS' table.
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
class CommonAVISTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonAVISTableMap';

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
        $this->setName('AVIS');
        $this->setPhpName('CommonAVIS');
        $this->setClassname('CommonAVIS');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'consultation', 'organisme', true, 30, null);
        $this->addForeignKey('consultation_ref', 'ConsultationRef', 'INTEGER', 'consultation', 'reference', true, null, null);
        $this->addColumn('avis', 'Avis', 'INTEGER', true, null, 0);
        $this->addColumn('intitule_avis', 'IntituleAvis', 'INTEGER', true, 2, 0);
        $this->addColumn('nom_avis', 'NomAvis', 'VARCHAR', true, 200, null);
        $this->addColumn('statut', 'Statut', 'CHAR', true, null, '0');
        $this->addColumn('nom_fichier', 'NomFichier', 'VARCHAR', true, 200, null);
        $this->addColumn('horodatage', 'Horodatage', 'BLOB', true, null, null);
        $this->addColumn('untrusteddate', 'Untrusteddate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('agent_id', 'AgentId', 'INTEGER', true, null, 0);
        $this->addColumn('avis_telechargeable', 'AvisTelechargeable', 'INTEGER', true, null, 0);
        $this->addColumn('url', 'Url', 'LONGVARCHAR', false, null, null);
        $this->addColumn('type', 'Type', 'CHAR', false, null, '0');
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', true, 20, null);
        $this->addColumn('date_pub', 'DatePub', 'VARCHAR', false, 20, null);
        $this->addColumn('type_doc_genere', 'TypeDocGenere', 'INTEGER', true, null, 0);
        $this->addColumn('langue', 'Langue', 'VARCHAR', true, 10, null);
        $this->addColumn('type_avis_pub', 'TypeAvisPub', 'INTEGER', false, 5, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('organisme' => 'organisme', 'consultation_ref' => 'reference', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonAVISTableMap
