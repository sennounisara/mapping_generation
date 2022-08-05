<?php



/**
 * This class defines the structure of the 'Echange' table.
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
class CommonEchangeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonEchangeTableMap';

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
        $this->setName('Echange');
        $this->setPhpName('CommonEchange');
        $this->setClassname('CommonEchange');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('objet', 'Objet', 'VARCHAR', true, 255, '');
        $this->addColumn('corps', 'Corps', 'LONGVARCHAR', true, null, null);
        $this->addColumn('expediteur', 'Expediteur', 'VARCHAR', true, 100, '');
        $this->addColumn('id_createur', 'IdCreateur', 'INTEGER', false, null, 0);
        $this->addColumn('ref_consultation', 'RefConsultation', 'INTEGER', true, null, 0);
        $this->addColumn('option_envoi', 'OptionEnvoi', 'INTEGER', true, null, 0);
        $this->addColumn('date_message', 'DateMessage', 'VARCHAR', true, 25, '');
        $this->addColumn('format', 'Format', 'INTEGER', true, null, 0);
        $this->addColumn('id_action_declencheur', 'IdActionDeclencheur', 'INTEGER', true, null, 0);
        $this->addColumn('status', 'Status', 'INTEGER', true, 2, 0);
        $this->addColumn('service_id', 'ServiceId', 'INTEGER', false, null, 0);
        $this->addColumn('email_expediteur', 'EmailExpediteur', 'VARCHAR', true, 100, '');
        $this->addColumn('id_type_message', 'IdTypeMessage', 'INTEGER', true, null, null);
        $this->addColumn('destinataires_retraits', 'DestinatairesRetraits', 'CLOB', false, null, null);
        $this->addColumn('destinataires_questions', 'DestinatairesQuestions', 'CLOB', false, null, null);
        $this->addColumn('destinataires_depots', 'DestinatairesDepots', 'CLOB', false, null, null);
        $this->addColumn('destinataires_bd_fournisseurs', 'DestinatairesBdFournisseurs', 'CLOB', false, null, null);
        $this->addColumn('destinataires_libres', 'DestinatairesLibres', 'CLOB', false, null, null);
        $this->addColumn('page_source', 'PageSource', 'VARCHAR', false, 255, null);
        $this->addColumn('destinataires', 'Destinataires', 'CLOB', false, null, null);
        $this->addColumn('destinataire_visioconference', 'DestinataireVisioconference', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonEchangeTableMap
