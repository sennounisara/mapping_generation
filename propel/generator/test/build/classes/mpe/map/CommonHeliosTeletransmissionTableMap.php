<?php



/**
 * This class defines the structure of the 'Helios_teletransmission' table.
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
class CommonHeliosTeletransmissionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonHeliosTeletransmissionTableMap';

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
        $this->setName('Helios_teletransmission');
        $this->setPhpName('CommonHeliosTeletransmission');
        $this->setClassname('CommonHeliosTeletransmission');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'consultation', 'organisme', true, 30, '');
        $this->addColumn('shown_id', 'ShownId', 'VARCHAR', true, 20, '');
        $this->addColumn('id_agent_creation', 'IdAgentCreation', 'INTEGER', true, null, 0);
        $this->addForeignKey('consultation_ref', 'ConsultationRef', 'INTEGER', 'consultation', 'reference', false, null, null);
        $this->addColumn('publicite_cons', 'PubliciteCons', 'CHAR', false, 20, null);
        $this->addColumn('dce_items', 'DceItems', 'VARCHAR', false, 255, null);
        $this->addColumn('ids_pvs_cao', 'IdsPvsCao', 'VARCHAR', false, 255, null);
        $this->addColumn('ids_rapports_prefet', 'IdsRapportsPrefet', 'VARCHAR', false, 255, null);
        $this->addColumn('deliberation_mapa', 'DeliberationMapa', 'CHAR', false, null, null);
        $this->addColumn('tableau_ar', 'TableauAr', 'INTEGER', false, null, null);
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
        $this->addColumn('date_envoi', 'DateEnvoi', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
        $this->addColumn('id_agent_envoi', 'IdAgentEnvoi', 'INTEGER', true, null, 0);
        $this->addColumn('nom_piecej1', 'NomPiecej1', 'VARCHAR', true, 250, '');
        $this->addColumn('piecej1', 'Piecej1', 'INTEGER', true, null, 0);
        $this->addColumn('horodatage_piecej1', 'HorodatagePiecej1', 'BLOB', true, null, null);
        $this->addColumn('untrusteddate_piecej1', 'UntrusteddatePiecej1', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
        $this->addColumn('taille_piecej1', 'TaillePiecej1', 'VARCHAR', true, 20, '');
        $this->addColumn('nom_piecej2', 'NomPiecej2', 'VARCHAR', true, 250, '');
        $this->addColumn('piecej2', 'Piecej2', 'INTEGER', true, null, 0);
        $this->addColumn('horodatage_piecej2', 'HorodatagePiecej2', 'BLOB', true, null, null);
        $this->addColumn('untrusteddate_piecej2', 'UntrusteddatePiecej2', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
        $this->addColumn('taille_piecej2', 'TaillePiecej2', 'VARCHAR', true, 20, '');
        $this->addColumn('piecej1_desc', 'Piecej1Desc', 'CLOB', false, null, null);
        $this->addColumn('piecej2_desc', 'Piecej2Desc', 'CLOB', false, null, null);
        $this->addColumn('fichier_xml', 'FichierXml', 'BLOB', true, null, null);
        $this->addColumn('nom_dossierzip', 'NomDossierzip', 'VARCHAR', true, 250, '');
        $this->addColumn('taille_dossierzip', 'TailleDossierzip', 'VARCHAR', true, 250, '');
        $this->addColumn('objet_libre', 'ObjetLibre', 'VARCHAR', true, 250, '');
        $this->addColumn('commentaire_libre', 'CommentaireLibre', 'VARCHAR', true, 250, '');
        $this->addColumn('sig_piece_principale', 'SigPiecePrincipale', 'BLOB', true, null, null);
        $this->addColumn('ref_utilisateur', 'RefUtilisateur', 'VARCHAR', true, 200, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('organisme' => 'organisme', 'consultation_ref' => 'reference', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonHeliosTeletransmissionTableMap
