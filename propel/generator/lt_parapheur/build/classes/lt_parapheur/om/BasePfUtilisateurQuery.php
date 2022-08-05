<?php


/**
 * Base class that represents a query for the 'pf_utilisateur' table.
 *
 * 
 *
 * @method PfUtilisateurQuery orderByIdUtilisateur($order = Criteria::ASC) Order by the ID_UTILISATEUR column
 * @method PfUtilisateurQuery orderByLogin($order = Criteria::ASC) Order by the LOGIN column
 * @method PfUtilisateurQuery orderByMotDePasse($order = Criteria::ASC) Order by the MOT_DE_PASSE column
 * @method PfUtilisateurQuery orderByProfil($order = Criteria::ASC) Order by the PROFIL column
 * @method PfUtilisateurQuery orderByNomFr($order = Criteria::ASC) Order by the NOM_FR column
 * @method PfUtilisateurQuery orderByPrenomFr($order = Criteria::ASC) Order by the PRENOM_FR column
 * @method PfUtilisateurQuery orderByNomAr($order = Criteria::ASC) Order by the NOM_AR column
 * @method PfUtilisateurQuery orderByPrenomAr($order = Criteria::ASC) Order by the PRENOM_AR column
 * @method PfUtilisateurQuery orderByEmail($order = Criteria::ASC) Order by the EMAIL column
 * @method PfUtilisateurQuery orderByTelephone($order = Criteria::ASC) Order by the TELEPHONE column
 * @method PfUtilisateurQuery orderByActif($order = Criteria::ASC) Order by the ACTIF column
 *
 * @method PfUtilisateurQuery groupByIdUtilisateur() Group by the ID_UTILISATEUR column
 * @method PfUtilisateurQuery groupByLogin() Group by the LOGIN column
 * @method PfUtilisateurQuery groupByMotDePasse() Group by the MOT_DE_PASSE column
 * @method PfUtilisateurQuery groupByProfil() Group by the PROFIL column
 * @method PfUtilisateurQuery groupByNomFr() Group by the NOM_FR column
 * @method PfUtilisateurQuery groupByPrenomFr() Group by the PRENOM_FR column
 * @method PfUtilisateurQuery groupByNomAr() Group by the NOM_AR column
 * @method PfUtilisateurQuery groupByPrenomAr() Group by the PRENOM_AR column
 * @method PfUtilisateurQuery groupByEmail() Group by the EMAIL column
 * @method PfUtilisateurQuery groupByTelephone() Group by the TELEPHONE column
 * @method PfUtilisateurQuery groupByActif() Group by the ACTIF column
 *
 * @method PfUtilisateurQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PfUtilisateurQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PfUtilisateurQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PfUtilisateur findOne(PropelPDO $con = null) Return the first PfUtilisateur matching the query
 * @method PfUtilisateur findOneOrCreate(PropelPDO $con = null) Return the first PfUtilisateur matching the query, or a new PfUtilisateur object populated from the query conditions when no match is found
 *
 * @method PfUtilisateur findOneByLogin(string $LOGIN) Return the first PfUtilisateur filtered by the LOGIN column
 * @method PfUtilisateur findOneByMotDePasse(string $MOT_DE_PASSE) Return the first PfUtilisateur filtered by the MOT_DE_PASSE column
 * @method PfUtilisateur findOneByProfil(string $PROFIL) Return the first PfUtilisateur filtered by the PROFIL column
 * @method PfUtilisateur findOneByNomFr(string $NOM_FR) Return the first PfUtilisateur filtered by the NOM_FR column
 * @method PfUtilisateur findOneByPrenomFr(string $PRENOM_FR) Return the first PfUtilisateur filtered by the PRENOM_FR column
 * @method PfUtilisateur findOneByNomAr(string $NOM_AR) Return the first PfUtilisateur filtered by the NOM_AR column
 * @method PfUtilisateur findOneByPrenomAr(string $PRENOM_AR) Return the first PfUtilisateur filtered by the PRENOM_AR column
 * @method PfUtilisateur findOneByEmail(string $EMAIL) Return the first PfUtilisateur filtered by the EMAIL column
 * @method PfUtilisateur findOneByTelephone(string $TELEPHONE) Return the first PfUtilisateur filtered by the TELEPHONE column
 * @method PfUtilisateur findOneByActif(string $ACTIF) Return the first PfUtilisateur filtered by the ACTIF column
 *
 * @method array findByIdUtilisateur(int $ID_UTILISATEUR) Return PfUtilisateur objects filtered by the ID_UTILISATEUR column
 * @method array findByLogin(string $LOGIN) Return PfUtilisateur objects filtered by the LOGIN column
 * @method array findByMotDePasse(string $MOT_DE_PASSE) Return PfUtilisateur objects filtered by the MOT_DE_PASSE column
 * @method array findByProfil(string $PROFIL) Return PfUtilisateur objects filtered by the PROFIL column
 * @method array findByNomFr(string $NOM_FR) Return PfUtilisateur objects filtered by the NOM_FR column
 * @method array findByPrenomFr(string $PRENOM_FR) Return PfUtilisateur objects filtered by the PRENOM_FR column
 * @method array findByNomAr(string $NOM_AR) Return PfUtilisateur objects filtered by the NOM_AR column
 * @method array findByPrenomAr(string $PRENOM_AR) Return PfUtilisateur objects filtered by the PRENOM_AR column
 * @method array findByEmail(string $EMAIL) Return PfUtilisateur objects filtered by the EMAIL column
 * @method array findByTelephone(string $TELEPHONE) Return PfUtilisateur objects filtered by the TELEPHONE column
 * @method array findByActif(string $ACTIF) Return PfUtilisateur objects filtered by the ACTIF column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BasePfUtilisateurQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePfUtilisateurQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'PfUtilisateur', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PfUtilisateurQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PfUtilisateurQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PfUtilisateurQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PfUtilisateurQuery) {
            return $criteria;
        }
        $query = new PfUtilisateurQuery();
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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   PfUtilisateur|PfUtilisateur[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PfUtilisateurPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PfUtilisateurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 PfUtilisateur A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdUtilisateur($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 PfUtilisateur A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_UTILISATEUR`, `LOGIN`, `MOT_DE_PASSE`, `PROFIL`, `NOM_FR`, `PRENOM_FR`, `NOM_AR`, `PRENOM_AR`, `EMAIL`, `TELEPHONE`, `ACTIF` FROM `pf_utilisateur` WHERE `ID_UTILISATEUR` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new PfUtilisateur();
            $obj->hydrate($row);
            PfUtilisateurPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PfUtilisateur|PfUtilisateur[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|PfUtilisateur[]|mixed the list of results, formatted by the current formatter
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
     * @return PfUtilisateurQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PfUtilisateurPeer::ID_UTILISATEUR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PfUtilisateurQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PfUtilisateurPeer::ID_UTILISATEUR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_UTILISATEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByIdUtilisateur(1234); // WHERE ID_UTILISATEUR = 1234
     * $query->filterByIdUtilisateur(array(12, 34)); // WHERE ID_UTILISATEUR IN (12, 34)
     * $query->filterByIdUtilisateur(array('min' => 12)); // WHERE ID_UTILISATEUR >= 12
     * $query->filterByIdUtilisateur(array('max' => 12)); // WHERE ID_UTILISATEUR <= 12
     * </code>
     *
     * @param     mixed $idUtilisateur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfUtilisateurQuery The current query, for fluid interface
     */
    public function filterByIdUtilisateur($idUtilisateur = null, $comparison = null)
    {
        if (is_array($idUtilisateur)) {
            $useMinMax = false;
            if (isset($idUtilisateur['min'])) {
                $this->addUsingAlias(PfUtilisateurPeer::ID_UTILISATEUR, $idUtilisateur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUtilisateur['max'])) {
                $this->addUsingAlias(PfUtilisateurPeer::ID_UTILISATEUR, $idUtilisateur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfUtilisateurPeer::ID_UTILISATEUR, $idUtilisateur, $comparison);
    }

    /**
     * Filter the query on the LOGIN column
     *
     * Example usage:
     * <code>
     * $query->filterByLogin('fooValue');   // WHERE LOGIN = 'fooValue'
     * $query->filterByLogin('%fooValue%'); // WHERE LOGIN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $login The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfUtilisateurQuery The current query, for fluid interface
     */
    public function filterByLogin($login = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($login)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $login)) {
                $login = str_replace('*', '%', $login);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfUtilisateurPeer::LOGIN, $login, $comparison);
    }

    /**
     * Filter the query on the MOT_DE_PASSE column
     *
     * Example usage:
     * <code>
     * $query->filterByMotDePasse('fooValue');   // WHERE MOT_DE_PASSE = 'fooValue'
     * $query->filterByMotDePasse('%fooValue%'); // WHERE MOT_DE_PASSE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motDePasse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfUtilisateurQuery The current query, for fluid interface
     */
    public function filterByMotDePasse($motDePasse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motDePasse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motDePasse)) {
                $motDePasse = str_replace('*', '%', $motDePasse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfUtilisateurPeer::MOT_DE_PASSE, $motDePasse, $comparison);
    }

    /**
     * Filter the query on the PROFIL column
     *
     * Example usage:
     * <code>
     * $query->filterByProfil('fooValue');   // WHERE PROFIL = 'fooValue'
     * $query->filterByProfil('%fooValue%'); // WHERE PROFIL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $profil The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfUtilisateurQuery The current query, for fluid interface
     */
    public function filterByProfil($profil = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($profil)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $profil)) {
                $profil = str_replace('*', '%', $profil);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfUtilisateurPeer::PROFIL, $profil, $comparison);
    }

    /**
     * Filter the query on the NOM_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFr('fooValue');   // WHERE NOM_FR = 'fooValue'
     * $query->filterByNomFr('%fooValue%'); // WHERE NOM_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfUtilisateurQuery The current query, for fluid interface
     */
    public function filterByNomFr($nomFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFr)) {
                $nomFr = str_replace('*', '%', $nomFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfUtilisateurPeer::NOM_FR, $nomFr, $comparison);
    }

    /**
     * Filter the query on the PRENOM_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomFr('fooValue');   // WHERE PRENOM_FR = 'fooValue'
     * $query->filterByPrenomFr('%fooValue%'); // WHERE PRENOM_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfUtilisateurQuery The current query, for fluid interface
     */
    public function filterByPrenomFr($prenomFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomFr)) {
                $prenomFr = str_replace('*', '%', $prenomFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfUtilisateurPeer::PRENOM_FR, $prenomFr, $comparison);
    }

    /**
     * Filter the query on the NOM_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAr('fooValue');   // WHERE NOM_AR = 'fooValue'
     * $query->filterByNomAr('%fooValue%'); // WHERE NOM_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfUtilisateurQuery The current query, for fluid interface
     */
    public function filterByNomAr($nomAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAr)) {
                $nomAr = str_replace('*', '%', $nomAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfUtilisateurPeer::NOM_AR, $nomAr, $comparison);
    }

    /**
     * Filter the query on the PRENOM_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAr('fooValue');   // WHERE PRENOM_AR = 'fooValue'
     * $query->filterByPrenomAr('%fooValue%'); // WHERE PRENOM_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfUtilisateurQuery The current query, for fluid interface
     */
    public function filterByPrenomAr($prenomAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAr)) {
                $prenomAr = str_replace('*', '%', $prenomAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfUtilisateurPeer::PRENOM_AR, $prenomAr, $comparison);
    }

    /**
     * Filter the query on the EMAIL column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE EMAIL = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE EMAIL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfUtilisateurQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfUtilisateurPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the TELEPHONE column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone('fooValue');   // WHERE TELEPHONE = 'fooValue'
     * $query->filterByTelephone('%fooValue%'); // WHERE TELEPHONE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfUtilisateurQuery The current query, for fluid interface
     */
    public function filterByTelephone($telephone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephone)) {
                $telephone = str_replace('*', '%', $telephone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfUtilisateurPeer::TELEPHONE, $telephone, $comparison);
    }

    /**
     * Filter the query on the ACTIF column
     *
     * Example usage:
     * <code>
     * $query->filterByActif('fooValue');   // WHERE ACTIF = 'fooValue'
     * $query->filterByActif('%fooValue%'); // WHERE ACTIF LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfUtilisateurQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actif)) {
                $actif = str_replace('*', '%', $actif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfUtilisateurPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PfUtilisateur $pfUtilisateur Object to remove from the list of results
     *
     * @return PfUtilisateurQuery The current query, for fluid interface
     */
    public function prune($pfUtilisateur = null)
    {
        if ($pfUtilisateur) {
            $this->addUsingAlias(PfUtilisateurPeer::ID_UTILISATEUR, $pfUtilisateur->getIdUtilisateur(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
