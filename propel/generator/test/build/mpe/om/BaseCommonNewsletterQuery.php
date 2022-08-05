<?php


/**
 * Base class that represents a query for the 'Newsletter' table.
 *
 * 
 *
 * @method CommonNewsletterQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonNewsletterQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonNewsletterQuery orderByObjet($order = Criteria::ASC) Order by the objet column
 * @method CommonNewsletterQuery orderByCorps($order = Criteria::ASC) Order by the corps column
 * @method CommonNewsletterQuery orderByIdServiceRedacteur($order = Criteria::ASC) Order by the id_service_redacteur column
 * @method CommonNewsletterQuery orderByNomRedacteur($order = Criteria::ASC) Order by the nom_redacteur column
 * @method CommonNewsletterQuery orderByPrenomRedacteur($order = Criteria::ASC) Order by the prenom_redacteur column
 * @method CommonNewsletterQuery orderByEnvoyeParNom($order = Criteria::ASC) Order by the envoye_par_nom column
 * @method CommonNewsletterQuery orderByEnvoyeParPrenom($order = Criteria::ASC) Order by the envoye_par_prenom column
 * @method CommonNewsletterQuery orderByEnvoyeParEmail($order = Criteria::ASC) Order by the envoye_par_email column
 * @method CommonNewsletterQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonNewsletterQuery orderByDateDerniereModification($order = Criteria::ASC) Order by the date_derniere_modification column
 * @method CommonNewsletterQuery orderByDateEnvoi($order = Criteria::ASC) Order by the date_envoi column
 * @method CommonNewsletterQuery orderByIdServiceDestinataire($order = Criteria::ASC) Order by the id_service_destinataire column
 * @method CommonNewsletterQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonNewsletterQuery orderByDestinataires($order = Criteria::ASC) Order by the destinataires column
 * @method CommonNewsletterQuery orderByInclureServicesDescendants($order = Criteria::ASC) Order by the inclure_services_descendants column
 * @method CommonNewsletterQuery orderByTypeDestinataire($order = Criteria::ASC) Order by the type_destinataire column
 *
 * @method CommonNewsletterQuery groupById() Group by the id column
 * @method CommonNewsletterQuery groupByOrganisme() Group by the organisme column
 * @method CommonNewsletterQuery groupByObjet() Group by the objet column
 * @method CommonNewsletterQuery groupByCorps() Group by the corps column
 * @method CommonNewsletterQuery groupByIdServiceRedacteur() Group by the id_service_redacteur column
 * @method CommonNewsletterQuery groupByNomRedacteur() Group by the nom_redacteur column
 * @method CommonNewsletterQuery groupByPrenomRedacteur() Group by the prenom_redacteur column
 * @method CommonNewsletterQuery groupByEnvoyeParNom() Group by the envoye_par_nom column
 * @method CommonNewsletterQuery groupByEnvoyeParPrenom() Group by the envoye_par_prenom column
 * @method CommonNewsletterQuery groupByEnvoyeParEmail() Group by the envoye_par_email column
 * @method CommonNewsletterQuery groupByDateCreation() Group by the date_creation column
 * @method CommonNewsletterQuery groupByDateDerniereModification() Group by the date_derniere_modification column
 * @method CommonNewsletterQuery groupByDateEnvoi() Group by the date_envoi column
 * @method CommonNewsletterQuery groupByIdServiceDestinataire() Group by the id_service_destinataire column
 * @method CommonNewsletterQuery groupByStatut() Group by the statut column
 * @method CommonNewsletterQuery groupByDestinataires() Group by the destinataires column
 * @method CommonNewsletterQuery groupByInclureServicesDescendants() Group by the inclure_services_descendants column
 * @method CommonNewsletterQuery groupByTypeDestinataire() Group by the type_destinataire column
 *
 * @method CommonNewsletterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonNewsletterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonNewsletterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonNewsletterQuery leftJoinCommonNewsletterPieceJointe($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonNewsletterPieceJointe relation
 * @method CommonNewsletterQuery rightJoinCommonNewsletterPieceJointe($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonNewsletterPieceJointe relation
 * @method CommonNewsletterQuery innerJoinCommonNewsletterPieceJointe($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonNewsletterPieceJointe relation
 *
 * @method CommonNewsletter findOne(PropelPDO $con = null) Return the first CommonNewsletter matching the query
 * @method CommonNewsletter findOneOrCreate(PropelPDO $con = null) Return the first CommonNewsletter matching the query, or a new CommonNewsletter object populated from the query conditions when no match is found
 *
 * @method CommonNewsletter findOneById(int $id) Return the first CommonNewsletter filtered by the id column
 * @method CommonNewsletter findOneByOrganisme(string $organisme) Return the first CommonNewsletter filtered by the organisme column
 * @method CommonNewsletter findOneByObjet(string $objet) Return the first CommonNewsletter filtered by the objet column
 * @method CommonNewsletter findOneByCorps(string $corps) Return the first CommonNewsletter filtered by the corps column
 * @method CommonNewsletter findOneByIdServiceRedacteur(int $id_service_redacteur) Return the first CommonNewsletter filtered by the id_service_redacteur column
 * @method CommonNewsletter findOneByNomRedacteur(string $nom_redacteur) Return the first CommonNewsletter filtered by the nom_redacteur column
 * @method CommonNewsletter findOneByPrenomRedacteur(string $prenom_redacteur) Return the first CommonNewsletter filtered by the prenom_redacteur column
 * @method CommonNewsletter findOneByEnvoyeParNom(string $envoye_par_nom) Return the first CommonNewsletter filtered by the envoye_par_nom column
 * @method CommonNewsletter findOneByEnvoyeParPrenom(string $envoye_par_prenom) Return the first CommonNewsletter filtered by the envoye_par_prenom column
 * @method CommonNewsletter findOneByEnvoyeParEmail(string $envoye_par_email) Return the first CommonNewsletter filtered by the envoye_par_email column
 * @method CommonNewsletter findOneByDateCreation(string $date_creation) Return the first CommonNewsletter filtered by the date_creation column
 * @method CommonNewsletter findOneByDateDerniereModification(string $date_derniere_modification) Return the first CommonNewsletter filtered by the date_derniere_modification column
 * @method CommonNewsletter findOneByDateEnvoi(string $date_envoi) Return the first CommonNewsletter filtered by the date_envoi column
 * @method CommonNewsletter findOneByIdServiceDestinataire(string $id_service_destinataire) Return the first CommonNewsletter filtered by the id_service_destinataire column
 * @method CommonNewsletter findOneByStatut(int $statut) Return the first CommonNewsletter filtered by the statut column
 * @method CommonNewsletter findOneByDestinataires(string $destinataires) Return the first CommonNewsletter filtered by the destinataires column
 * @method CommonNewsletter findOneByInclureServicesDescendants(string $inclure_services_descendants) Return the first CommonNewsletter filtered by the inclure_services_descendants column
 * @method CommonNewsletter findOneByTypeDestinataire(int $type_destinataire) Return the first CommonNewsletter filtered by the type_destinataire column
 *
 * @method array findById(int $id) Return CommonNewsletter objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonNewsletter objects filtered by the organisme column
 * @method array findByObjet(string $objet) Return CommonNewsletter objects filtered by the objet column
 * @method array findByCorps(string $corps) Return CommonNewsletter objects filtered by the corps column
 * @method array findByIdServiceRedacteur(int $id_service_redacteur) Return CommonNewsletter objects filtered by the id_service_redacteur column
 * @method array findByNomRedacteur(string $nom_redacteur) Return CommonNewsletter objects filtered by the nom_redacteur column
 * @method array findByPrenomRedacteur(string $prenom_redacteur) Return CommonNewsletter objects filtered by the prenom_redacteur column
 * @method array findByEnvoyeParNom(string $envoye_par_nom) Return CommonNewsletter objects filtered by the envoye_par_nom column
 * @method array findByEnvoyeParPrenom(string $envoye_par_prenom) Return CommonNewsletter objects filtered by the envoye_par_prenom column
 * @method array findByEnvoyeParEmail(string $envoye_par_email) Return CommonNewsletter objects filtered by the envoye_par_email column
 * @method array findByDateCreation(string $date_creation) Return CommonNewsletter objects filtered by the date_creation column
 * @method array findByDateDerniereModification(string $date_derniere_modification) Return CommonNewsletter objects filtered by the date_derniere_modification column
 * @method array findByDateEnvoi(string $date_envoi) Return CommonNewsletter objects filtered by the date_envoi column
 * @method array findByIdServiceDestinataire(string $id_service_destinataire) Return CommonNewsletter objects filtered by the id_service_destinataire column
 * @method array findByStatut(int $statut) Return CommonNewsletter objects filtered by the statut column
 * @method array findByDestinataires(string $destinataires) Return CommonNewsletter objects filtered by the destinataires column
 * @method array findByInclureServicesDescendants(string $inclure_services_descendants) Return CommonNewsletter objects filtered by the inclure_services_descendants column
 * @method array findByTypeDestinataire(int $type_destinataire) Return CommonNewsletter objects filtered by the type_destinataire column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonNewsletterQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonNewsletterQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonNewsletter', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonNewsletterQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonNewsletterQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonNewsletterQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonNewsletterQuery) {
            return $criteria;
        }
        $query = new CommonNewsletterQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonNewsletter|CommonNewsletter[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonNewsletterPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonNewsletterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonNewsletter A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `objet`, `corps`, `id_service_redacteur`, `nom_redacteur`, `prenom_redacteur`, `envoye_par_nom`, `envoye_par_prenom`, `envoye_par_email`, `date_creation`, `date_derniere_modification`, `date_envoi`, `id_service_destinataire`, `statut`, `destinataires`, `inclure_services_descendants`, `type_destinataire` FROM `Newsletter` WHERE `id` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonNewsletter();
            $obj->hydrate($row);
            CommonNewsletterPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonNewsletter|CommonNewsletter[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonNewsletter[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonNewsletterPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonNewsletterPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonNewsletterPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonNewsletterPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonNewsletterPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonNewsletterPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the objet column
     *
     * Example usage:
     * <code>
     * $query->filterByObjet('fooValue');   // WHERE objet = 'fooValue'
     * $query->filterByObjet('%fooValue%'); // WHERE objet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterByObjet($objet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objet)) {
                $objet = str_replace('*', '%', $objet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPeer::OBJET, $objet, $comparison);
    }

    /**
     * Filter the query on the corps column
     *
     * Example usage:
     * <code>
     * $query->filterByCorps('fooValue');   // WHERE corps = 'fooValue'
     * $query->filterByCorps('%fooValue%'); // WHERE corps LIKE '%fooValue%'
     * </code>
     *
     * @param     string $corps The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterByCorps($corps = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($corps)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $corps)) {
                $corps = str_replace('*', '%', $corps);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPeer::CORPS, $corps, $comparison);
    }

    /**
     * Filter the query on the id_service_redacteur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdServiceRedacteur(1234); // WHERE id_service_redacteur = 1234
     * $query->filterByIdServiceRedacteur(array(12, 34)); // WHERE id_service_redacteur IN (12, 34)
     * $query->filterByIdServiceRedacteur(array('min' => 12)); // WHERE id_service_redacteur >= 12
     * $query->filterByIdServiceRedacteur(array('max' => 12)); // WHERE id_service_redacteur <= 12
     * </code>
     *
     * @param     mixed $idServiceRedacteur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterByIdServiceRedacteur($idServiceRedacteur = null, $comparison = null)
    {
        if (is_array($idServiceRedacteur)) {
            $useMinMax = false;
            if (isset($idServiceRedacteur['min'])) {
                $this->addUsingAlias(CommonNewsletterPeer::ID_SERVICE_REDACTEUR, $idServiceRedacteur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idServiceRedacteur['max'])) {
                $this->addUsingAlias(CommonNewsletterPeer::ID_SERVICE_REDACTEUR, $idServiceRedacteur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPeer::ID_SERVICE_REDACTEUR, $idServiceRedacteur, $comparison);
    }

    /**
     * Filter the query on the nom_redacteur column
     *
     * Example usage:
     * <code>
     * $query->filterByNomRedacteur('fooValue');   // WHERE nom_redacteur = 'fooValue'
     * $query->filterByNomRedacteur('%fooValue%'); // WHERE nom_redacteur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomRedacteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterByNomRedacteur($nomRedacteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomRedacteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomRedacteur)) {
                $nomRedacteur = str_replace('*', '%', $nomRedacteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPeer::NOM_REDACTEUR, $nomRedacteur, $comparison);
    }

    /**
     * Filter the query on the prenom_redacteur column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomRedacteur('fooValue');   // WHERE prenom_redacteur = 'fooValue'
     * $query->filterByPrenomRedacteur('%fooValue%'); // WHERE prenom_redacteur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomRedacteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterByPrenomRedacteur($prenomRedacteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomRedacteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomRedacteur)) {
                $prenomRedacteur = str_replace('*', '%', $prenomRedacteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPeer::PRENOM_REDACTEUR, $prenomRedacteur, $comparison);
    }

    /**
     * Filter the query on the envoye_par_nom column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvoyeParNom('fooValue');   // WHERE envoye_par_nom = 'fooValue'
     * $query->filterByEnvoyeParNom('%fooValue%'); // WHERE envoye_par_nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envoyeParNom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterByEnvoyeParNom($envoyeParNom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envoyeParNom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envoyeParNom)) {
                $envoyeParNom = str_replace('*', '%', $envoyeParNom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPeer::ENVOYE_PAR_NOM, $envoyeParNom, $comparison);
    }

    /**
     * Filter the query on the envoye_par_prenom column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvoyeParPrenom('fooValue');   // WHERE envoye_par_prenom = 'fooValue'
     * $query->filterByEnvoyeParPrenom('%fooValue%'); // WHERE envoye_par_prenom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envoyeParPrenom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterByEnvoyeParPrenom($envoyeParPrenom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envoyeParPrenom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envoyeParPrenom)) {
                $envoyeParPrenom = str_replace('*', '%', $envoyeParPrenom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPeer::ENVOYE_PAR_PRENOM, $envoyeParPrenom, $comparison);
    }

    /**
     * Filter the query on the envoye_par_email column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvoyeParEmail('fooValue');   // WHERE envoye_par_email = 'fooValue'
     * $query->filterByEnvoyeParEmail('%fooValue%'); // WHERE envoye_par_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envoyeParEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterByEnvoyeParEmail($envoyeParEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envoyeParEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envoyeParEmail)) {
                $envoyeParEmail = str_replace('*', '%', $envoyeParEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPeer::ENVOYE_PAR_EMAIL, $envoyeParEmail, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('fooValue');   // WHERE date_creation = 'fooValue'
     * $query->filterByDateCreation('%fooValue%'); // WHERE date_creation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateCreation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateCreation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateCreation)) {
                $dateCreation = str_replace('*', '%', $dateCreation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the date_derniere_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDerniereModification('fooValue');   // WHERE date_derniere_modification = 'fooValue'
     * $query->filterByDateDerniereModification('%fooValue%'); // WHERE date_derniere_modification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateDerniereModification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterByDateDerniereModification($dateDerniereModification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateDerniereModification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateDerniereModification)) {
                $dateDerniereModification = str_replace('*', '%', $dateDerniereModification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPeer::DATE_DERNIERE_MODIFICATION, $dateDerniereModification, $comparison);
    }

    /**
     * Filter the query on the date_envoi column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnvoi('fooValue');   // WHERE date_envoi = 'fooValue'
     * $query->filterByDateEnvoi('%fooValue%'); // WHERE date_envoi LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateEnvoi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterByDateEnvoi($dateEnvoi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateEnvoi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateEnvoi)) {
                $dateEnvoi = str_replace('*', '%', $dateEnvoi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPeer::DATE_ENVOI, $dateEnvoi, $comparison);
    }

    /**
     * Filter the query on the id_service_destinataire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdServiceDestinataire('fooValue');   // WHERE id_service_destinataire = 'fooValue'
     * $query->filterByIdServiceDestinataire('%fooValue%'); // WHERE id_service_destinataire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idServiceDestinataire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterByIdServiceDestinataire($idServiceDestinataire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idServiceDestinataire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idServiceDestinataire)) {
                $idServiceDestinataire = str_replace('*', '%', $idServiceDestinataire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPeer::ID_SERVICE_DESTINATAIRE, $idServiceDestinataire, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut(1234); // WHERE statut = 1234
     * $query->filterByStatut(array(12, 34)); // WHERE statut IN (12, 34)
     * $query->filterByStatut(array('min' => 12)); // WHERE statut >= 12
     * $query->filterByStatut(array('max' => 12)); // WHERE statut <= 12
     * </code>
     *
     * @param     mixed $statut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonNewsletterPeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonNewsletterPeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the destinataires column
     *
     * Example usage:
     * <code>
     * $query->filterByDestinataires('fooValue');   // WHERE destinataires = 'fooValue'
     * $query->filterByDestinataires('%fooValue%'); // WHERE destinataires LIKE '%fooValue%'
     * </code>
     *
     * @param     string $destinataires The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterByDestinataires($destinataires = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($destinataires)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $destinataires)) {
                $destinataires = str_replace('*', '%', $destinataires);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPeer::DESTINATAIRES, $destinataires, $comparison);
    }

    /**
     * Filter the query on the inclure_services_descendants column
     *
     * Example usage:
     * <code>
     * $query->filterByInclureServicesDescendants('fooValue');   // WHERE inclure_services_descendants = 'fooValue'
     * $query->filterByInclureServicesDescendants('%fooValue%'); // WHERE inclure_services_descendants LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inclureServicesDescendants The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterByInclureServicesDescendants($inclureServicesDescendants = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inclureServicesDescendants)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $inclureServicesDescendants)) {
                $inclureServicesDescendants = str_replace('*', '%', $inclureServicesDescendants);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPeer::INCLURE_SERVICES_DESCENDANTS, $inclureServicesDescendants, $comparison);
    }

    /**
     * Filter the query on the type_destinataire column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDestinataire(1234); // WHERE type_destinataire = 1234
     * $query->filterByTypeDestinataire(array(12, 34)); // WHERE type_destinataire IN (12, 34)
     * $query->filterByTypeDestinataire(array('min' => 12)); // WHERE type_destinataire >= 12
     * $query->filterByTypeDestinataire(array('max' => 12)); // WHERE type_destinataire <= 12
     * </code>
     *
     * @param     mixed $typeDestinataire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function filterByTypeDestinataire($typeDestinataire = null, $comparison = null)
    {
        if (is_array($typeDestinataire)) {
            $useMinMax = false;
            if (isset($typeDestinataire['min'])) {
                $this->addUsingAlias(CommonNewsletterPeer::TYPE_DESTINATAIRE, $typeDestinataire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeDestinataire['max'])) {
                $this->addUsingAlias(CommonNewsletterPeer::TYPE_DESTINATAIRE, $typeDestinataire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPeer::TYPE_DESTINATAIRE, $typeDestinataire, $comparison);
    }

    /**
     * Filter the query by a related CommonNewsletterPieceJointe object
     *
     * @param   CommonNewsletterPieceJointe|PropelObjectCollection $commonNewsletterPieceJointe  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonNewsletterQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonNewsletterPieceJointe($commonNewsletterPieceJointe, $comparison = null)
    {
        if ($commonNewsletterPieceJointe instanceof CommonNewsletterPieceJointe) {
            return $this
                ->addUsingAlias(CommonNewsletterPeer::ID, $commonNewsletterPieceJointe->getIdNewsletter(), $comparison);
        } elseif ($commonNewsletterPieceJointe instanceof PropelObjectCollection) {
            return $this
                ->useCommonNewsletterPieceJointeQuery()
                ->filterByPrimaryKeys($commonNewsletterPieceJointe->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonNewsletterPieceJointe() only accepts arguments of type CommonNewsletterPieceJointe or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonNewsletterPieceJointe relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function joinCommonNewsletterPieceJointe($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonNewsletterPieceJointe');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonNewsletterPieceJointe');
        }

        return $this;
    }

    /**
     * Use the CommonNewsletterPieceJointe relation CommonNewsletterPieceJointe object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonNewsletterPieceJointeQuery A secondary query class using the current class as primary query
     */
    public function useCommonNewsletterPieceJointeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonNewsletterPieceJointe($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonNewsletterPieceJointe', 'CommonNewsletterPieceJointeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonNewsletter $commonNewsletter Object to remove from the list of results
     *
     * @return CommonNewsletterQuery The current query, for fluid interface
     */
    public function prune($commonNewsletter = null)
    {
        if ($commonNewsletter) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonNewsletterPeer::ID), $commonNewsletter->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonNewsletterPeer::ORGANISME), $commonNewsletter->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
