<?php



/**
 * This class defines the structure of the 'Enveloppe' table.
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
class CommonEnveloppeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonEnveloppeTableMap';

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
        $this->setName('Enveloppe');
        $this->setPhpName('CommonEnveloppe');
        $this->setClassname('CommonEnveloppe');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_enveloppe_electro', 'IdEnveloppeElectro', 'INTEGER', true, 22, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('offre_id', 'OffreId', 'INTEGER', true, 22, 0);
        $this->addColumn('champs_optionnels', 'ChampsOptionnels', 'BLOB', true, null, null);
        $this->addColumn('fichier', 'Fichier', 'INTEGER', true, null, 0);
        $this->addColumn('supprime', 'Supprime', 'CHAR', true, null, '0');
        $this->addColumn('cryptage', 'Cryptage', 'CHAR', true, null, '1');
        $this->addColumn('nom_fichier', 'NomFichier', 'VARCHAR', true, 255, '');
        $this->addColumn('hash', 'Hash', 'VARCHAR', true, 40, '');
        $this->addColumn('type_env', 'TypeEnv', 'INTEGER', true, 1, 0);
        $this->addColumn('sous_pli', 'SousPli', 'INTEGER', true, 3, 0);
        $this->addColumn('attribue', 'Attribue', 'CHAR', true, null, '0');
        $this->addColumn('dateheure_ouverture', 'DateheureOuverture', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
        $this->addColumn('agent_id_ouverture', 'AgentIdOuverture', 'INTEGER', false, null, null);
        $this->addColumn('agent_id_ouverture2', 'AgentIdOuverture2', 'INTEGER', false, null, null);
        $this->addColumn('donnees_ouverture', 'DonneesOuverture', 'BLOB', true, null, null);
        $this->addColumn('horodatage_donnees_ouverture', 'HorodatageDonneesOuverture', 'BLOB', true, null, null);
        $this->addColumn('statut_enveloppe', 'StatutEnveloppe', 'INTEGER', true, 2, 1);
        $this->addColumn('agent_telechargement', 'AgentTelechargement', 'INTEGER', false, null, null);
        $this->addColumn('date_telechargement', 'DateTelechargement', 'VARCHAR', false, 20, null);
        $this->addColumn('repertoire_telechargement', 'RepertoireTelechargement', 'VARCHAR', false, 100, null);
        $this->addColumn('nom_agent_ouverture', 'NomAgentOuverture', 'VARCHAR', true, 100, '');
        $this->addColumn('dateheure_ouverture_agent2', 'DateheureOuvertureAgent2', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
        $this->addColumn('certificat', 'Certificat', 'LONGVARCHAR', false, null, null);
        $this->addColumn('montant', 'Montant', 'DOUBLE', false, null, null);
        $this->addColumn('montant_apres_modification', 'MontantApresModification', 'DOUBLE', false, null, null);
        $this->addColumn('type_attributaire', 'TypeAttributaire', 'CHAR', false, null, null);
        $this->getColumn('type_attributaire', false)->setValueSet(array (
  0 => '1',
  1 => '2',
  2 => '3',
  3 => '4',
));
        $this->addColumn('devise', 'Devise', 'VARCHAR', false, 20, null);
        $this->addColumn('rabais_preference_national', 'RabaisPreferenceNational', 'CHAR', true, null, '0');
        $this->getColumn('rabais_preference_national', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('type_correction_montant', 'TypeCorrectionMontant', 'VARCHAR', false, 20, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonEnveloppeTableMap
