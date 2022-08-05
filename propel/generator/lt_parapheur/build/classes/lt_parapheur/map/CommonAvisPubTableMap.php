<?php



/**
 * This class defines the structure of the 'Avis_Pub' table.
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
class CommonAvisPubTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonAvisPubTableMap';

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
        $this->setName('Avis_Pub');
        $this->setPhpName('CommonAvisPub');
        $this->setClassname('CommonAvisPub');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'consultation', 'organisme', true, 30, null);
        $this->addForeignKey('consultation_ref', 'ConsultationRef', 'INTEGER', 'consultation', 'reference', true, null, null);
        $this->addColumn('statut', 'Statut', 'CHAR', true, null, '0');
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', true, null, null);
        $this->addColumn('id_agent_validateur', 'IdAgentValidateur', 'INTEGER', false, 10, null);
        $this->addColumn('id_agent_validateur_eco', 'IdAgentValidateurEco', 'INTEGER', false, 10, null);
        $this->addColumn('id_agent_validateur_sip', 'IdAgentValidateurSip', 'INTEGER', false, 10, null);
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', true, 20, null);
        $this->addColumn('date_envoi', 'DateEnvoi', 'VARCHAR', false, 20, null);
        $this->addColumn('type_avis', 'TypeAvis', 'INTEGER', true, null, null);
        $this->addColumn('date_publication', 'DatePublication', 'VARCHAR', false, 20, null);
        $this->addColumn('date_validation', 'DateValidation', 'VARCHAR', false, 20, null);
        $this->addColumn('Sip', 'Sip', 'VARCHAR', false, 5, null);
        $this->addColumn('id_avis_portail', 'IdAvisPortail', 'INTEGER', false, 5, null);
        $this->addColumn('id_avis_presse', 'IdAvisPresse', 'INTEGER', false, 5, null);
        $this->addColumn('id_avis_pdf_opoce', 'IdAvisPdfOpoce', 'INTEGER', false, 5, null);
        $this->addColumn('id_blob_logo', 'IdBlobLogo', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('organisme' => 'organisme', 'consultation_ref' => 'reference', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonAvisPubTableMap
